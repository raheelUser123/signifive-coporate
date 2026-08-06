<?php
$pageTitle = 'Signifive Taxation & Corporate Consultancy';
$pageDescription = 'Signifive Taxation & Corporate Consultancy provides professional taxation, accounting, regulatory compliance, and corporate advisory services.';

$division = [
  'slug' => 'consultancy',
  'name' => 'Signifive Taxation & Corporate Consultancy',
  'heroImg' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1600',
  'heroHeading' => 'Empowering Businesses Through Trusted Advisory Solutions',
  'heroCopy' => 'Signifive Taxation & Corporate Consultancy provides professional taxation, accounting, regulatory compliance, and corporate advisory services that help individuals and businesses operate with confidence, clarity, and compliance.',
  'primaryCta' => 'Schedule a Consultation',
  'aboutHeading' => 'Professional Business Advisory Built on Trust and Compliance',
  'aboutCopy' => [
    'Running a successful business requires more than great ideas—it requires sound financial management, regulatory compliance, and informed decision-making.',
    'At Signifive Taxation & Corporate Consultancy, we provide reliable advisory services that help businesses and individuals manage their financial and legal obligations with confidence.',
    'Our commitment is to deliver accurate, transparent, and professional services that allow our clients to focus on achieving their goals.',
  ],
  'services' => [
    ['icon'=>'📑','title'=>'Income Tax Consultancy','desc'=>'Professional tax planning and filing solutions for individuals and businesses.'],
    ['icon'=>'📋','title'=>'Sales Tax Consultancy','desc'=>'Guidance on sales tax registration, compliance, and reporting requirements.'],
    ['icon'=>'🏢','title'=>'Company Registration','desc'=>'Assistance with business incorporation and legal registration procedures.'],
    ['icon'=>'🆔','title'=>'NTN Registration','desc'=>'Fast and professional National Tax Number registration services.'],
    ['icon'=>'📊','title'=>'Accounting & Bookkeeping','desc'=>'Accurate financial records that support informed business decisions.'],
    ['icon'=>'💼','title'=>'Payroll & Corporate Compliance','desc'=>'Helping businesses manage payroll while maintaining regulatory compliance.'],
  ],
  'features' => [
    ['title'=>'Regulatory Expertise','desc'=>'Helping clients stay compliant with changing legal and tax requirements.'],
    ['title'=>'Accurate Financial Management','desc'=>'Reliable accounting and reporting solutions that support business growth.'],
    ['title'=>'Transparent Advisory','desc'=>'Clear communication and ethical business practices in every engagement.'],
    ['title'=>'Long-Term Partnership','desc'=>'Supporting clients beyond compliance through ongoing business guidance.'],
  ],
  'process' => [
    ['title'=>'Understand Your Business Requirements','desc'=>'We begin by learning about your business, objectives, and regulatory requirements.'],
    ['title'=>'Assess Regulatory & Financial Needs','desc'=>'Our specialists evaluate your current situation and identify opportunities.'],
    ['title'=>'Deliver Professional Solutions','desc'=>'We provide clear recommendations and professionally manage agreed services.'],
    ['title'=>'Provide Ongoing Compliance & Advisory Support','desc'=>'As your business evolves, we continue providing guidance for sustainable growth.'],
  ],
  'audiences' => [
    ['icon'=>'👤','title'=>'Individuals','desc'=>'Tax planning and registration services for personal financial compliance.'],
    ['icon'=>'🚀','title'=>'Startups','desc'=>'Business registration, taxation, and advisory support for new ventures.'],
    ['icon'=>'🏢','title'=>'SMEs','desc'=>'Comprehensive accounting, payroll, and compliance solutions.'],
    ['icon'=>'🏛','title'=>'Corporate Organizations','desc'=>'Strategic taxation, financial management, and regulatory advisory services.'],
  ],
  'ctaHeading' => 'Build Your Business with Confidence',
  'ctaCopy' => 'Whether you\'re launching a new business, managing financial compliance, or seeking professional taxation advice, Signifive Taxation & Corporate Consultancy is ready to support your journey with trusted expertise.',
];

require_once __DIR__ . '/includes/division-template.php';
