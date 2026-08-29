<?php
namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Software Development',
                'icon' => 'fa fa-code',
                'short_description' => 'Custom web and enterprise software built with modern technologies to solve your unique business challenges.',
                'description' => '<p>We design and build scalable, robust software solutions tailored to your exact business needs. From web applications to enterprise platforms, our team delivers clean, maintainable code using Laravel, React, Vue.js, and more.</p><h4>What We Offer</h4><ul><li>Custom Web Application Development</li><li>API Development & Integration</li><li>ERP & CRM Systems</li><li>SaaS Platform Development</li><li>Legacy System Modernization</li></ul>',
                'sort_order' => 1,
                'show_on_home' => true,
                'meta_title' => 'Software Development Services | Your Company',
                'meta_description' => 'Custom software development services including web apps, APIs, ERP systems, and SaaS platforms.',
            ],
            [
                'title' => 'AI Automations',
                'icon' => 'fa fa-robot',
                'short_description' => 'Harness the power of AI to automate repetitive tasks, gain insights from data, and supercharge your business operations.',
                'description' => '<p>We implement AI-powered automation solutions that save time, reduce costs, and let your team focus on high-value work. From chatbots to intelligent data pipelines, we make AI practical and impactful.</p><h4>What We Offer</h4><ul><li>AI Chatbots & Virtual Assistants</li><li>Process Automation with AI</li><li>Data Analysis & Predictive Models</li><li>AI-Powered Content Generation</li><li>Custom LLM Integrations (OpenAI, Claude, Gemini)</li><li>Document Processing & OCR Automation</li></ul>',
                'sort_order' => 2,
                'show_on_home' => true,
                'meta_title' => 'AI Automation Services | Your Company',
                'meta_description' => 'AI automation services including chatbots, process automation, predictive analytics, and LLM integrations.',
            ],
            [
                'title' => 'Digital Marketing',
                'icon' => 'fa fa-bullhorn',
                'short_description' => 'Data-driven digital marketing strategies to grow your online presence, attract qualified leads, and increase revenue.',
                'description' => '<p>Our digital marketing team creates campaigns that connect your brand with the right audience at the right time. We combine creativity with analytics to deliver measurable results.</p><h4>What We Offer</h4><ul><li>Social Media Marketing (Facebook, Instagram, LinkedIn)</li><li>Pay-Per-Click (PPC) Advertising</li><li>Email Marketing Campaigns</li><li>Content Marketing Strategy</li><li>Brand Identity & Design</li><li>Analytics & Performance Reporting</li></ul>',
                'sort_order' => 3,
                'show_on_home' => true,
                'meta_title' => 'Digital Marketing Services | Your Company',
                'meta_description' => 'Full-service digital marketing including social media, PPC, email campaigns, and content marketing.',
            ],
            [
                'title' => 'SEO',
                'icon' => 'fa fa-search',
                'short_description' => 'Dominate search engine rankings and drive organic traffic with our proven SEO strategies and technical expertise.',
                'description' => '<p>We help businesses rank higher on Google and other search engines through proven, white-hat SEO techniques. Our strategies combine technical SEO, content optimization, and authority building for sustainable growth.</p><h4>What We Offer</h4><ul><li>Technical SEO Audit & Fixes</li><li>On-Page Optimization</li><li>Keyword Research & Strategy</li><li>Link Building & Off-Page SEO</li><li>Local SEO for Businesses</li><li>Monthly Ranking Reports</li></ul>',
                'sort_order' => 4,
                'show_on_home' => true,
                'meta_title' => 'SEO Services | Your Company',
                'meta_description' => 'Professional SEO services including technical audits, on-page optimization, link building, and local SEO.',
            ],
            [
                'title' => 'Shopify Ecommerce',
                'icon' => 'fa fa-shopping-cart',
                'short_description' => 'Launch, grow, and optimize your Shopify store with custom development, design, and marketing solutions.',
                'description' => '<p>We build high-converting Shopify stores from scratch and optimize existing ones for better performance and sales. Whether you need a new store, a custom theme, or app integrations, we deliver results.</p><h4>What We Offer</h4><ul><li>Custom Shopify Store Development</li><li>Shopify Theme Design & Customization</li><li>Product Setup & Catalog Management</li><li>Payment Gateway Integration</li><li>Third-Party App Integration</li><li>Shopify SEO & Conversion Optimization</li><li>Shopify Plus Development</li></ul>',
                'sort_order' => 5,
                'show_on_home' => true,
                'meta_title' => 'Shopify Development Services | Your Company',
                'meta_description' => 'Expert Shopify development including custom stores, theme customization, app integrations, and Shopify Plus.',
            ],
            [
                'title' => 'Mobile Applications',
                'icon' => 'fa fa-mobile',
                'short_description' => 'Beautiful, high-performance mobile apps for iOS and Android that your users will love.',
                'description' => '<p>We design and develop mobile applications that deliver exceptional user experiences across iOS and Android. From concept to App Store launch, we handle the entire process.</p><h4>What We Offer</h4><ul><li>iOS App Development (Swift)</li><li>Android App Development (Kotlin)</li><li>Cross-Platform Apps (React Native / Flutter)</li><li>UI/UX Design for Mobile</li><li>App Store Optimization (ASO)</li><li>App Maintenance & Updates</li><li>API Backend for Mobile Apps</li></ul>',
                'sort_order' => 6,
                'show_on_home' => true,
                'meta_title' => 'Mobile App Development Services | Your Company',
                'meta_description' => 'iOS and Android mobile app development including cross-platform apps with React Native and Flutter.',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}