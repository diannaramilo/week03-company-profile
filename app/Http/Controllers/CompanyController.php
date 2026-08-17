<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Data used across the site. In a full application this would come
     * from a database/model; for this mini project it is stored here so
     * every page can stay dynamic without duplicating markup.
     */
    protected function companyInfo(): array
    {
        return [
            'name'    => 'NovaTech Solutions',
            'tagline' => 'Building Reliable Software for Growing Businesses',
            'address' => '123 Rizal Avenue, Sta. Cruz, Laguna, Philippines',
            'email'   => 'hello@novatechsolutions.com',
            'phone'   => '+63 917 123 4567',
        ];
    }

    /**
     * GET / — Home page: hero banner, intro, featured services, CTA.
     */
    public function home()
    {
        $company = $this->companyInfo();

        $featuredServices = [
            ['title' => 'Web Development', 'description' => 'Custom, responsive websites and web apps built to scale.'],
            ['title' => 'Mobile Development', 'description' => 'Native and cross-platform apps for iOS and Android.'],
            ['title' => 'Cloud Solutions', 'description' => 'Cloud architecture, migration, and managed hosting.'],
        ];

        return view('pages.home', compact('company', 'featuredServices'));
    }

    /**
     * GET /about — About page: history, mission, vision, values, team.
     */
    public function about()
    {
        $company = $this->companyInfo();

        $coreValues = [
            'Integrity'      => 'We do what we say and take ownership of our work.',
            'Innovation'     => 'We look for better ways to solve real problems.',
            'Collaboration'  => 'We build with our clients, not just for them.',
            'Excellence'     => 'We hold our code and our service to a high standard.',
        ];

        $team = [
            ['name' => 'Maria Santos', 'role' => 'Founder & Lead Developer'],
            ['name' => 'Jonas Cruz', 'role' => 'UI/UX Designer'],
            ['name' => 'Angela Reyes', 'role' => 'Project Manager'],
        ];

        return view('pages.about', compact('company', 'coreValues', 'team'));
    }

    /**
     * GET /services — Services page: at least six services.
     */
    public function services()
    {
        $company = $this->companyInfo();

        $services = [
            ['icon' => 'monitor', 'title' => 'Web Development', 'description' => 'Responsive websites and web applications using modern frameworks.'],
            ['icon' => 'device', 'title' => 'Mobile Development', 'description' => 'Cross-platform mobile apps built for performance and usability.'],
            ['icon' => 'layers', 'title' => 'UI/UX Design', 'description' => 'User-centered interface design backed by research and testing.'],
            ['icon' => 'cloud', 'title' => 'Cloud Solutions', 'description' => 'Scalable cloud infrastructure, deployment, and monitoring.'],
            ['icon' => 'shield', 'title' => 'Cybersecurity', 'description' => 'Security audits, hardening, and incident response planning.'],
            ['icon' => 'compass', 'title' => 'IT Consulting', 'description' => 'Technology strategy and systems planning for growing teams.'],
        ];

        return view('pages.services', compact('company', 'services'));
    }

    /**
     * GET /contact — Contact page: form UI, address, email, phone, socials.
     */
    public function contact()
    {
        $company = $this->companyInfo();

        $socialLinks = [
            'Facebook'  => 'https://facebook.com/novatechsolutions',
            'LinkedIn'  => 'https://linkedin.com/company/novatechsolutions',
            'Twitter'   => 'https://twitter.com/novatechsolutions',
        ];

        return view('pages.contact', compact('company', 'socialLinks'));
    }
}