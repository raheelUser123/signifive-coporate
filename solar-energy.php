<?php
$pageTitle = 'Signifive Solar Energy';
$pageDescription = 'Signifive Solar Energy delivers reliable renewable energy solutions designed to help homeowners, businesses, and industries reduce energy costs, improve efficiency, and embrace a cleaner future.';

$division = [
  'slug' => 'solar',
  'name' => 'Signifive Solar Energy',
  'heroImg' => 'https://images.unsplash.com/photo-1509391366360-2e959784a276?q=80&w=1600',
  'heroHeading' => 'Powering a Sustainable Future Through Smart Energy Solutions',
  'heroCopy' => 'Signifive Solar Energy delivers reliable renewable energy solutions designed to help homeowners, businesses, and industries reduce energy costs, improve efficiency, and embrace a cleaner future.',
  'primaryCta' => 'Request a Consultation',
  'aboutHeading' => 'Reliable Renewable Energy Solutions for a Better Tomorrow',
  'aboutCopy' => [
    'At Signifive Solar Energy, we believe renewable energy is more than an investment—it is a commitment to sustainability, efficiency, and long-term savings.',
    'We provide professional solar solutions tailored to the needs of residential, commercial, and industrial clients. From initial consultation and system design to installation and ongoing maintenance, our team ensures every project is delivered with quality, precision, and reliability.',
    'By combining technical expertise with customer-focused service, we help our clients transition toward cleaner energy while maximizing long-term value.',
  ],
  'services' => [
    ['icon'=>'☀','title'=>'Residential Solar Solutions','desc'=>'Efficient solar systems designed to reduce electricity costs for homeowners.'],
    ['icon'=>'🏢','title'=>'Commercial Solar Systems','desc'=>'Scalable energy solutions that improve operational efficiency for businesses.'],
    ['icon'=>'🏭','title'=>'Industrial Solar Projects','desc'=>'Customized renewable energy systems for industrial facilities and large-scale operations.'],
    ['icon'=>'⚡','title'=>'Solar System Installation','desc'=>'Professional installation ensuring optimal performance and long-term reliability.'],
    ['icon'=>'🔋','title'=>'Net Metering Assistance','desc'=>'Helping clients benefit from government-approved net metering solutions.'],
    ['icon'=>'🛠','title'=>'Annual Maintenance Services (AMC)','desc'=>'Regular inspections and maintenance to maximize system efficiency and performance.'],
  ],
  'features' => [
    ['title'=>'Quality Solutions','desc'=>'Designed for maximum efficiency and long-term performance.'],
    ['title'=>'Professional Installation','desc'=>'Executed by skilled professionals following industry best practices.'],
    ['title'=>'Reliable Support','desc'=>'Ongoing assistance to ensure consistent system performance.'],
    ['title'=>'Sustainable Value','desc'=>'Helping clients reduce energy costs while supporting environmental responsibility.'],
  ],
  'process' => [
    ['title'=>'Site Assessment','desc'=>'Understanding your energy requirements and evaluating installation feasibility.'],
    ['title'=>'System Design','desc'=>'Developing a customized solar solution based on your energy needs.'],
    ['title'=>'Installation','desc'=>'Professional installation with quality assurance at every stage.'],
    ['title'=>'Maintenance & Support','desc'=>'Providing continuous support to ensure long-term performance.'],
  ],
  'audiences' => [
    ['icon'=>'🏠','title'=>'Residential','desc'=>'Helping homeowners achieve energy independence.'],
    ['icon'=>'🏢','title'=>'Commercial','desc'=>'Reducing operational costs for businesses.'],
    ['icon'=>'🏭','title'=>'Industrial','desc'=>'Supporting large-scale energy requirements with customized solutions.'],
    ['icon'=>'🏗','title'=>'Real Estate & Developers','desc'=>'Partnering with developers to integrate sustainable energy into modern projects.'],
  ],
  'ctaHeading' => "Let's Build a Smarter Energy Future Together",
  'ctaCopy' => 'Whether you\'re planning your first solar installation or expanding your renewable energy infrastructure, Signifive Solar Energy is ready to provide professional guidance and dependable solutions.',
];

require_once __DIR__ . '/includes/division-template.php';
