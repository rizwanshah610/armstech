<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Service;
use App\Models\BlogPost;
use App\Models\Portfolio;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.xml file';

    public function handle(): void
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/')->setPriority(1.0)->setChangeFrequency('weekly'))
            ->add(Url::create('/about')->setPriority(0.8))
            ->add(Url::create('/services')->setPriority(0.8))
            ->add(Url::create('/portfolio')->setPriority(0.8))
            ->add(Url::create('/blog')->setPriority(0.8))
            ->add(Url::create('/contact')->setPriority(0.7));

        // Dynamic service pages (only if slug exists on your model)
        Service::where('is_active', true)->get()->each(function ($service) use ($sitemap) {
            $sitemap->add(
                Url::create("/services/{$service->slug}")
                    ->setPriority(0.6)
                    ->setChangeFrequency('monthly')
            );
        });

        // Dynamic blog posts
        BlogPost::where('is_published', true)->get()->each(function ($post) use ($sitemap) {
            $sitemap->add(
                Url::create("/blog/{$post->slug}")
                    ->setLastModificationDate($post->updated_at)
                    ->setPriority(0.6)
                    ->setChangeFrequency('monthly')
            );
        });

        // Dynamic portfolio pages
        Portfolio::all()->each(function ($portfolio) use ($sitemap) {
            $sitemap->add(
                Url::create("/portfolio/{$portfolio->slug}")
                    ->setPriority(0.6)
            );
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully at public/sitemap.xml');
    }
}