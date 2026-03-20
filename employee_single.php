<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<title>Skyline Digital - Company Profile | Slate &amp; Emerald Careers</title>
<!-- Tailwind CSS v3 CDN -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Google Fonts: Plus Jakarta Sans -->
<link href="https://fonts.googleapis.com" rel="preconnect" />
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
    rel="stylesheet" />
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    emerald: {
                        50: '#eff6ff',
                        100: '#dbeafe',
                        200: '#bfdbfe',
                        300: '#93c5fd',
                        400: '#60a5fa',
                        500: '#3b82f6',
                        600: '#2563eb',
                        700: '#1d4ed8',
                        800: '#1e40af',
                        900: '#1e3a8a',
                    },
                },
                fontFamily: {
                    'plus-jakarta': ['"Plus Jakarta Sans"', 'sans-serif'],
                },
                borderRadius: {
                    'eight': '8px',
                }
            }
        }
    }
</script>
<style data-purpose="typography">
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        -webkit-font-smoothing: antialiased;
    }
</style>
<style data-purpose="layout-tweaks">
    .hero-gradient {
        background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('https://placehold.co/1920x600/e2e8f0/64748b?text=Office+Culture');
        background-size: cover;
        background-position: center;
    }

    .card-shadow {
        box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.05);
    }
</style>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />


<body class="bg-slate-50 text-slate-900">
    <!-- BEGIN: TopNavBar -->
    <?php include "landing/nav.php" ?>
    <!-- END: TopNavBar -->
    <main class="pt-16">
        <!-- BEGIN: HeroSection -->
        <section class="relative" data-purpose="company-hero">
            <div class="h-64 md:h-80 hero-gradient"></div>
            <div class="max-w-5xl mx-auto px-6 -mt-20 relative z-10">
                <div
                    class="bg-white p-8 rounded-2xl shadow-xl flex flex-col md:flex-row items-center md:items-end justify-between gap-6 border border-slate-100">
                    <div class="flex flex-col md:flex-row items-center gap-6">
                        <div
                            class="w-24 h-24 bg-white rounded-2xl shadow-md border border-slate-100 p-4 flex items-center justify-center">
                            <img alt="Skyline Digital Logo" class="w-full h-auto object-contain"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDTI2EfTqzs5duN0l5O9Yi-rLpZ1xcD8iD91FX9U3rTbjPuXefbTostRPeaANhSId5qA7zEENvlFHWW-RdKH2nQgQmeVwskGfvyvaiF5Hqm9r92NhU28_FKQB2VvXxeNnwbA6G0NhhuQMlKZ6Mo7NtluXQzUxB_yH_fhCOhSm85PeVKzdVtPbq_IO5q61dTBUqUR9m3skJZ8x5sb1pQhCNT5qOu_6m5sDrvRcByu_d_0CefVS8MwMNEztM6MhzTi9hn133xOyV5eA"
                                style="clip-path: inset(100px 100px 100px 100px);" /> <!-- Mocking logo extraction -->
                            <div class="text-emerald-600 font-bold text-2xl">S</div> <!-- Placeholder icon -->
                        </div>
                        <div class="text-center md:text-left">
                            <p class="text-sm font-medium text-slate-500 uppercase tracking-wider">Digital Experience
                                Studio</p>
                            <h1 class="text-4xl font-extrabold text-slate-900 tracking-tight">Skyline Digital</h1>
                            <div
                                class="flex flex-wrap justify-center md:justify-start gap-4 mt-2 text-sm text-slate-500 font-medium">
                                <span class="flex items-center gap-1">📍 San Francisco, USA</span>
                                <span class="flex items-center gap-1">👥 180+ team members</span>
                                <span class="flex items-center gap-1">📅 Since 2014</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <button
                            class="px-6 py-2.5 bg-indigo-50 text-indigo-700 font-semibold flex items-center gap-2 hover:bg-indigo-100 transition-all border border-indigo-100 rounded-full"><span
                                class="material-symbols-outlined text-2xl">bookmark</span> Follow Company</button>
                        <button
                            class="px-6 py-2.5 bg-blue-600 text-white font-semibold flex items-center gap-2 hover:bg-blue-700 transition-all shadow-md rounded-full"><span
                                class="material-symbols-outlined text-2xl">work</span> View Open Roles</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: HeroSection -->
        <!-- BEGIN: MainContent -->
        <section class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 lg:grid-cols-12 gap-8"
            data-purpose="main-content-layout">
            <!-- Left Column: Company Details -->
            <div class="lg:col-span-8 space-y-8">
                <!-- Who We Are Card -->
                <article class="bg-white p-8 rounded-2xl card-shadow border border-slate-100"
                    data-purpose="about-section">
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Who We Are</h2>
                    <div class="text-slate-600 leading-relaxed space-y-4">
                        <p>Skyline Digital is a multidisciplinary studio building immersive product experiences for
                            finance, ecommerce, and emerging tech brands. We combine research-led design with
                            battle-tested engineering to launch products that scale across millions of users.</p>
                        <p>Our teams operate with a maker-first culture: weekly design critiques, shared ownership of
                            roadmaps, and space to iterate rapidly so we can keep pushing what digital experiences can
                            be.</p>
                    </div>
                </article>
                <!-- What We Value Card -->
                <article class="bg-white p-8 rounded-2xl card-shadow border border-slate-100"
                    data-purpose="values-section">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6">What We Value</h2>
                    <div class="flex flex-wrap gap-3">
                        <span
                            class="px-4 py-2 bg-blue-50 text-blue-700 text-xs font-bold rounded-full border border-blue-100 flex items-center gap-2">💡
                            Product Thinking</span>
                        <span
                            class="px-4 py-2 bg-indigo-50 text-indigo-700 text-xs font-bold rounded-full border border-indigo-100 flex items-center gap-2">🔗
                            Transparent Collaboration</span>
                        <span
                            class="px-4 py-2 bg-violet-50 text-violet-700 text-xs font-bold rounded-full border border-violet-100 flex items-center gap-2">🔬
                            Experiments Over Ego</span>
                        <span
                            class="px-4 py-2 bg-blue-50 text-blue-700 text-xs font-bold rounded-full border border-blue-100 flex items-center gap-2">🌐
                            Global Impact</span>
                        <span
                            class="px-4 py-2 bg-indigo-50 text-indigo-700 text-xs font-bold rounded-full border border-indigo-100 flex items-center gap-2">💙
                            People-First Culture</span>
                    </div>
                </article>
                <!-- Life at Skyline Grid -->
                <article class="bg-white p-8 rounded-2xl card-shadow border border-slate-100"
                    data-purpose="benefits-section">
                    <h2 class="text-2xl font-bold text-slate-900 mb-8">Life at Skyline</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Benefit 1 -->
                        <div
                            class="p-6 bg-slate-50 rounded-xl border border-slate-100 group hover:bg-white hover:border-emerald-200 transition-all">
                            <div
                                class="w-10 h-10 bg-white rounded-lg flex items-center justify-center mb-4 text-blue-600 border border-slate-100">
                                ✈️
                            </div>
                            <h3 class="font-bold text-slate-900 mb-2">Remote-Friendly</h3>
                            <p class="text-sm text-slate-500 leading-relaxed">Work where you're most productive with
                                quarterly in-person retreats and studio hubs worldwide.</p>
                        </div>
                        <!-- Benefit 2 -->
                        <div
                            class="p-6 bg-slate-50 rounded-xl border border-slate-100 group hover:bg-white hover:border-emerald-200 transition-all">
                            <div
                                class="w-10 h-10 bg-white rounded-lg flex items-center justify-center mb-4 text-indigo-600 border border-slate-100">
                                🎓
                            </div>
                            <h3 class="font-bold text-slate-900 mb-2">Continuous Learning</h3>
                            <p class="text-sm text-slate-500 leading-relaxed">Annual stipend for conferences,
                                certifications, and mentorship programs led by industry experts.</p>
                        </div>
                        <!-- Benefit 3 -->
                        <div
                            class="p-6 bg-slate-50 rounded-xl border border-slate-100 group hover:bg-white hover:border-emerald-200 transition-all">
                            <div
                                class="w-10 h-10 bg-white rounded-lg flex items-center justify-center mb-4 text-violet-600 border border-slate-100">
                                🩺
                            </div>
                            <h3 class="font-bold text-slate-900 mb-2">Health + Wellness</h3>
                            <p class="text-sm text-slate-500 leading-relaxed">Premium medical cover, wellness
                                allowances, and flexible time off to recharge and explore.</p>
                        </div>
                        <!-- Benefit 4 -->
                        <div
                            class="p-6 bg-slate-50 rounded-xl border border-slate-100 group hover:bg-white hover:border-emerald-200 transition-all">
                            <div
                                class="w-10 h-10 bg-white rounded-lg flex items-center justify-center mb-4 text-blue-600 border border-slate-100">
                                📈
                            </div>
                            <h3 class="font-bold text-slate-900 mb-2">Growth Mindset</h3>
                            <p class="text-sm text-slate-500 leading-relaxed">Clear leveling frameworks, quarterly
                                career conversations, and opportunities to switch squads.</p>
                        </div>
                    </div>
                </article>
                <!-- Studio Gallery -->
                <article class="bg-white p-8 rounded-2xl card-shadow border border-slate-100"
                    data-purpose="gallery-section">
                    <h2 class="text-2xl font-bold text-slate-900 mb-2">Inside Our Studios</h2>
                    <p class="text-sm text-slate-500 mb-8">Take a peek at some of our favourite moments across Skyline
                        hubs and remote retreats.</p>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <img alt="Studio Life" class="rounded-xl object-cover h-40 w-full"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_9RP0ZQc52Xj4O9spewwH75iPzcK8Zu1D_STtgvFXN0oVNvTQxRrAWvQDcIlPUD_QAnLYVll3C0e9zD8mPSClg9wa9uNf6D0vFV7J1LYQCD91rLwRkg3USBOQavQA5X0uksoiSZXO9nEEEdGoGZDa_i-3Ke-fj3KGQygTXTGMosXqKYO0YT8-Pl97vCJBkIj7WJmiyr1d7N0DAcSFh5zvxZs6LSZNhk5PA3q14qjUh_WDaIcHl-nxe-7k7ZZFvp9D5J_5U5kQQw" />
                        <img alt="Studio Life" class="rounded-xl object-cover h-40 w-full"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBr2KCC35FoYgdaTCcwlPO-VPaWhdbyC2zjUtJO1_4zv6H5vMZERL5Fle-Z1sa_ptG7894VQmW70SVG3McBNqHCc_fxXfEJKGBqYkmSvBYm9HyY_B84gL1hOmoLa1uwPqJf7a-IMWfNImA8RO9Aswdu-7D-ClIU5NluV3xYcICrQkKJL-RIIk8rANfVbeB6WXT43pKAntQVBee2doaTW7Ay-gmJEorwHeI7QqGmjOwxnCSB9sdk0fJ9prpnmUeh7N_Kfbke9aq6jQ" />
                        <img alt="Studio Life" class="rounded-xl object-cover h-40 w-full"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBdF_OPTVSb_vhdOAgCl4h-8Zrc8N2WNGfgLgTPqfyo1QqcCRjL2zE95UTqi1jxrLx4TN3MCCZGvByPfIjL0j04pqTySQZE2DVG-Uhyt9mQlkghlBWnvL1lVqvnUYcHqQ9vbewxu6DOjeRzosLuSQXO82hhNquIPegy7-Gs9J_VEknPUxjDXuPnNQzWQ-olAcZVarACOcwIQ7qVsaQQEsz6LGwwi1PRalTfiYxO482j3VuujiJWlGYu9-rVbaqoZH6tWszy3Jv7Rg" />
                        <img alt="Studio Life" class="rounded-xl object-cover h-40 w-full col-span-2 md:col-span-1"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2bspUnc6nToMgyDPn7BMCPywQVWDn3CrvG6wuw-gRRYhYWsBru_e0TpYyBNnTqtJPf0HxqZ5GOHmz_n33g4a3UsYsT7DbEEbEAsIpRZeuUH-Pqp59eEpSCDWC7fM2-9ipAPSnQO71MNOh8L02rx0vDx04DFML-C5miRr_APlc1nKBOrK-5cxCNOoRam52M7RqS-9wyTQDs-gw1Fuxn9QU5rgSXvvVlTqr3Mp2NoPIWuVku_-phUxSymv2lLmg44mKJTjcY9xXfg" />
                    </div>
                </article>
            </div>
            <!-- Right Column: Sidebar -->
            <aside class="lg:col-span-4 space-y-6">
                <!-- Company Snapshot Card -->
                <div class="bg-white p-6 rounded-2xl card-shadow border border-slate-100"
                    data-purpose="snapshot-sidebar">
                    <h3 class="text-lg font-bold text-slate-900 mb-6">Company Snapshot</h3>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-4">
                            <span class="text-slate-400 mt-1">🌐</span>
                            <div>
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-tighter">Website</p>
                                <a class="text-sm font-semibold text-blue-600 hover:underline  no-underline" 
                                    href="#">skylinedigital.com</a>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="text-slate-400 mt-1">💼</span>
                            <div>
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-tighter">Industry</p>
                                <p class="text-sm font-semibold text-slate-700">Product Design &amp; Engineering</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="text-slate-400 mt-1">🏢</span>
                            <div>
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-tighter">Departments</p>
                                <p class="text-sm font-semibold text-slate-700">Design, Engineering, Research</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="text-slate-400 mt-1">📍</span>
                            <div>
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-tighter">Offices</p>
                                <p class="text-sm font-semibold text-slate-700">SF · Berlin · Singapore · Remote</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="text-slate-400 mt-1">📊</span>
                            <div>
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-tighter">Growth</p>
                                <p class="text-sm font-semibold text-slate-700">45% YoY revenue</p>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-8 pt-6 border-t border-slate-100 flex gap-4 text-slate-400">
                        <a class="hover:text-blue-600 no-underline" href="#">LinkedIn</a>
                        <a class="hover:text-blue-600 no-underline" href="#">X</a>
                        <a class="hover:text-blue-600 no-underline" href="#">YouTube</a>
                    </div>
                </div>
                <!-- Get In Touch Form -->
                <div class="bg-white p-6 rounded-2xl card-shadow border border-slate-100"
                    data-purpose="contact-sidebar">
                    <h3 class="text-lg font-bold text-slate-900 mb-4">Get In Touch</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-500 mb-1">Full name</label>
                            <input
                                class="w-full text-sm border-slate-200 rounded-lg focus:ring-emerald-500 focus:border-emerald-500"
                                placeholder="Jordan Blake" type="text" />
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 mb-1">Work email</label>
                            <input
                                class="w-full text-sm border-slate-200 rounded-lg focus:ring-emerald-500 focus:border-emerald-500"
                                placeholder="you@company.com" type="email" />
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 mb-1">Message</label>
                            <textarea
                                class="w-full text-sm border-slate-200 rounded-lg focus:ring-emerald-500 focus:border-emerald-500"
                                placeholder="Tell us how we can collaborate..." rows="3"></textarea>
                        </div>
                        <button
                            class="w-full py-2.5 bg-white border border-blue-200 text-blue-600 font-bold hover:bg-blue-50 transition-colors rounded-full">Send
                            Message</button>
                    </form>
                </div>
                <!-- Locations Widget -->
                <div class="bg-white p-6 rounded-2xl card-shadow border border-slate-100"
                    data-purpose="locations-sidebar">
                    <h3 class="text-lg font-bold text-slate-900 mb-4">Studio Locations</h3>
                    <div class="w-full h-48 bg-slate-100 rounded-xl overflow-hidden grayscale">
                        <img alt="Map" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDmVgfTRkbQVvJLzwtFqhUzD-N0CfHbeRe7yVFZUBH2MH1eqFEfFlncGWTh6q58Fsl6HAp0pOp9I9bFgY_fWafvFmarN1SPWHvMe60EuUx18MRapKu33WLywZULDDLf3TZPkR-Ubk3eiF-T9PweobOwpuzgn0jIN-b8hPwTj1NPvYgY18suLULrpoewNZC1hA43jy1lmgc23SwDbFGivrqn8Srj5uBlrZngd8CVE8a0ke3b6eb8fo6JulvC9Q5ZaIrBK6FveKgsgw" />
                    </div>
                </div>
            </aside>
        </section>
        <!-- END: MainContent -->
        <!-- BEGIN: OpenRoles -->
        <section class="bg-slate-50 py-20 border-t border-slate-200" data-purpose="job-listings">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
                    <div>
                        <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Open Roles</h2>
                        <p class="text-slate-500 font-medium">We're hiring across design, engineering, and strategy.
                            Join our fully distributed team.</p>
                    </div>
                    <button
                        class="flex items-center gap-2 px-5 py-2.5 bg-white border border-blue-200 text-blue-600 font-bold hover:bg-blue-50 transition-all text-sm shadow-sm rounded-full">
                        <span>📧</span> Refer a Friend
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Job 1 -->
                    <div
                        class="bg-white p-6 rounded-2xl card-shadow border border-slate-100 relative group cursor-pointer hover:border-emerald-400 transition-all">
                        <div class="flex justify-between items-start mb-6">
                            <span
                                class="px-2.5 py-1 bg-emerald-50 text-emerald-700 text-[10px] font-bold rounded-md border border-emerald-100 uppercase tracking-wider">Full
                                Time</span>
                        </div>
                        <h4
                            class="text-xl font-bold text-slate-900 mb-4 group-hover:text-emerald-700 transition-colors">
                            Lead Product Designer</h4>
                        <p class="text-xs font-bold text-slate-400 mb-2 uppercase tracking-widest">Salary: $120k - $150k
                        </p>
                        <p class="text-sm font-semibold text-blue-600 mb-8 flex items-center gap-1">📍 Remote · North
                            America</p>
                        <div class="flex items-center justify-between pt-6 border-t border-slate-50">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-8 h-8 rounded-lg bg-emerald-50 flex items-center justify-center p-1 border border-emerald-100">
                                    <span class="text-emerald-600 text-xs font-bold">S</span>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-slate-400 uppercase">Posted</p>
                                    <p class="text-xs font-bold text-slate-700">3 days ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Job 2 -->
                    <div
                        class="bg-white p-6 rounded-2xl card-shadow border border-slate-100 relative group cursor-pointer hover:border-emerald-400 transition-all">
                        <div class="flex justify-between items-start mb-6">
                            <span
                                class="px-2.5 py-1 bg-orange-50 text-orange-700 text-[10px] font-bold rounded-md border border-orange-100 uppercase tracking-wider">Contract</span>
                        </div>
                        <h4
                            class="text-xl font-bold text-slate-900 mb-4 group-hover:text-emerald-700 transition-colors">
                            Senior Frontend Engineer</h4>
                        <p class="text-xs font-bold text-slate-400 mb-2 uppercase tracking-widest">Salary: €85k - €110k
                        </p>
                        <p class="text-sm font-semibold text-blue-600 mb-8 flex items-center gap-1">📍 Berlin, Germany
                        </p>
                        <div class="flex items-center justify-between pt-6 border-t border-slate-50">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-8 h-8 rounded-lg bg-orange-50 flex items-center justify-center p-1 border border-orange-100">
                                    <span class="text-orange-600 text-xs font-bold">S</span>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-slate-400 uppercase">Posted</p>
                                    <p class="text-xs font-bold text-slate-700">1 week ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Job 3 -->
                    <div
                        class="bg-white p-6 rounded-2xl card-shadow border border-slate-100 relative group cursor-pointer hover:border-emerald-400 transition-all">
                        <div
                            class="absolute -top-3 -right-3 w-8 h-8 bg-red-500 rounded-full flex items-center justify-center text-white text-xs border-4 border-slate-50">
                            ⚡</div>
                        <div class="flex justify-between items-start mb-6">
                            <span
                                class="px-2.5 py-1 bg-emerald-50 text-emerald-700 text-[10px] font-bold rounded-md border border-emerald-100 uppercase tracking-wider">Full
                                Time</span>
                        </div>
                        <h4
                            class="text-xl font-bold text-slate-900 mb-4 group-hover:text-emerald-700 transition-colors">
                            Platform Delivery Manager</h4>
                        <p class="text-xs font-bold text-slate-400 mb-2 uppercase tracking-widest">Salary: $95k - $135k
                        </p>
                        <p class="text-sm font-semibold text-blue-600 mb-8 flex items-center gap-1">📍 Singapore</p>
                        <div class="flex items-center justify-between pt-6 border-t border-slate-50">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-8 h-8 rounded-lg bg-emerald-50 flex items-center justify-center p-1 border border-emerald-100">
                                    <span class="text-emerald-600 text-xs font-bold">S</span>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-slate-400 uppercase">Posted</p>
                                    <p class="text-xs font-bold text-slate-700">2 weeks ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: OpenRoles -->
    </main>
    <!-- BEGIN: Footer -->
    <?php include "landing/footer.php"?>
    <!-- END: Footer -->
</body>
