<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Ryan Wilke · Cybersecurity Professional. CEO of Lorikeet Security. Penetration Tester, Red Team Operator, CTF Platform Architect, and Security Educator.">
  <meta name="author" content="Ryan Wilke">
  <title>Ryan Wilke · Cybersecurity &amp; Red Team</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome 6 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<!-- ─── Navbar ────────────────────────────────────────────────────────────── -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#hero">
      <span class="prompt">~/</span>parrotassassin15<span class="cursor"></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav gap-1">
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
        <li class="nav-item"><a class="nav-link" href="#certifications">Certs</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#cves">CVEs</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- ─── Hero ──────────────────────────────────────────────────────────────── -->
<section id="hero">
  <div class="hero-bg-orbs" aria-hidden="true">
    <div class="orb orb-blue"></div>
    <div class="orb orb-pink"></div>
    <div class="orb orb-white"></div>
  </div>

  <div class="hero-content">
    <div class="hero-title-block" id="hero-title-block">
      <h1 class="hero-name">Ryan Wilke</h1>
      <p class="hero-tagline">
        Offensive Security &nbsp;·&nbsp;
        <span>Red Teaming</span> &nbsp;·&nbsp;
        Full-Spectrum Pentesting &nbsp;·&nbsp;
        <span>CTF &amp; Training</span>
      </p>
      <div class="hero-cta mt-4">
        <a href="#experience" class="btn-trans-primary">View Experience</a>
        <a href="https://lorikeetsecurity.com" target="_blank" rel="noopener" class="btn-trans-outline"><span>Lorikeet Security</span></a>
      </div>
    </div>

    <div class="terminal-window">
      <div class="terminal-titlebar">
        <span class="terminal-dot terminal-dot-red"></span>
        <span class="terminal-dot terminal-dot-amber"></span>
        <span class="terminal-dot terminal-dot-green"></span>
        <span class="terminal-title">terminal · bash</span>
      </div>
      <div class="terminal-body" id="terminal-output" aria-live="polite" aria-label="Terminal animation">
      </div>
    </div>
  </div>
</section>

<hr class="trans-stripe m-0">

<!-- ─── About ─────────────────────────────────────────────────────────────── -->
<section id="about">
  <div class="container">
    <div class="about-grid">
      <div class="about-text reveal">
        <div class="about-flag-stripe"></div>
        <span class="section-label">// about me</span>
        <h2 class="section-title mb-4">Building security that actually matters.</h2>
        <p>
          I'm a <strong>cybersecurity professional and entrepreneur</strong> based in Kissimmee, FL.
          In 2021 I founded what became <strong>Lorikeet Security</strong>, a full-service offensive
          security firm delivering penetration testing, red team operations, compliance consulting,
          and hands-on security training.
        </p>
        <p>
          From building the Parrot CTFs platform from the ground up to leading enterprise pentests
          at <strong>Prescient Security</strong> and securing crypto infrastructure at
          <strong>Cointelegraph</strong>, I bring a practitioner-first perspective to every engagement.
          My work spans web apps, APIs, thick clients, mobile, cloud (AWS), and everything between.
        </p>
        <p>
          I believe the best security comes from deeply understanding how attackers think, which is
          why I've built <strong>50+ hands-on labs</strong>, authored professional certification
          programs, and keep competing in CTFs alongside the clients I protect.
        </p>
      </div>

      <div class="about-stats reveal">
        <div class="row g-3">
          <div class="col-6">
            <div class="stat-card">
              <div class="stat-number">5+</div>
              <div class="stat-label">Years as CEO</div>
            </div>
          </div>
          <div class="col-6">
            <div class="stat-card">
              <div class="stat-number">50+</div>
              <div class="stat-label">Labs Built</div>
            </div>
          </div>
          <div class="col-6">
            <div class="stat-card">
              <div class="stat-number">6K+</div>
              <div class="stat-label">LinkedIn Followers</div>
            </div>
          </div>
          <div class="col-6">
            <div class="stat-card">
              <div class="stat-number">4</div>
              <div class="stat-label">Certifications</div>
            </div>
          </div>
          <div class="col-6">
            <div class="stat-card">
              <div class="stat-number">16</div>
              <div class="stat-label">CVEs</div>
            </div>
          </div>
          <div class="col-6">
            <div class="stat-card">
              <div class="stat-number">9</div>
              <div class="stat-label">Pentest Disciplines</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<hr class="trans-stripe m-0">

<!-- ─── Experience ────────────────────────────────────────────────────────── -->
<section id="experience">
  <div class="container">
    <div class="mb-5 reveal">
      <span class="section-label">// experience</span>
      <h2 class="section-title">Career Timeline</h2>
    </div>

    <div class="timeline">

      <!-- LvlUp Ventures -->
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-date">May 2026 &ndash; Present &nbsp;·&nbsp; 2 mos</div>
          <div class="timeline-role">VC Scout</div>
          <div class="timeline-company">LvlUp Ventures &nbsp;·&nbsp; Contract &nbsp;·&nbsp; Global / Remote</div>
          <div class="exp-tags">
            <span class="tag">Venture Capital</span>
            <span class="tag">Deal Flow</span>
            <span class="tag">Cybersecurity</span>
          </div>
        </div>
      </div>

      <!-- Assura -->
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-date">Oct 2025 &ndash; Present &nbsp;·&nbsp; 9 mos</div>
          <div class="timeline-role">Fractional Cybersecurity Consultant</div>
          <div class="timeline-company">Assura, Inc. &nbsp;·&nbsp; Part-time &nbsp;·&nbsp; US / Remote</div>
          <div class="exp-tags">
            <span class="tag">Consulting</span>
            <span class="tag">Risk Assessment</span>
            <span class="tag">Security Advisory</span>
          </div>
        </div>
      </div>

      <!-- Lorikeet Security / Parrot CTFs -->
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-date">Jun 2021 &ndash; Present &nbsp;·&nbsp; 5 yrs 1 mo</div>
          <div class="timeline-role">Chief Executive Officer</div>
          <div class="timeline-company">Lorikeet Security (formerly Parrot CTFs) &nbsp;·&nbsp; Full-time &nbsp;·&nbsp; Global / Remote</div>
          <ul class="timeline-bullets">
            <li>Founded and scaled a cybersecurity firm delivering penetration testing, compliance consulting, and hands-on security training for startup and enterprise clients.</li>
            <li>Built and evolved Parrot CTFs into a full-stack cybersecurity platform supporting CTF events, training programs, and client security engagements.</li>
            <li>Architected core infrastructure: Proxmox virtualization, pfSense networking, MySQL/cloud DB systems, AWS and Stripe integrations.</li>
            <li>Developed 50+ hands-on labs and CTF challenges spanning pentesting, malware analysis, and reverse engineering.</li>
            <li>Designed professional certification programs with integrated exam environments, automated grading, and scalable lab provisioning.</li>
            <li>Engineered backend systems for on-demand lab deployment, team scoring, and managed security service delivery (PTaaS / SOCaaS).</li>
            <li>Built internal SaaS capabilities: user dashboards, billing systems, event management, and operational automation.</li>
            <li>Implemented DevOps pipelines to ensure platform scalability, reliability, and continuous delivery.</li>
          </ul>
          <div class="exp-tags mt-2">
            <span class="tag">Penetration Testing</span>
            <span class="tag">Red Team</span>
            <span class="tag">CTF Development</span>
            <span class="tag">Compliance</span>
            <span class="tag">AWS</span>
            <span class="tag">Proxmox</span>
            <span class="tag">pfSense</span>
            <span class="tag">PTaaS</span>
            <span class="tag">SOCaaS</span>
            <span class="tag-pink tag">SaaS Engineering</span>
            <span class="tag-pink tag">DevOps</span>
          </div>
        </div>
      </div>

      <!-- Prescient Security – Tech Lead -->
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-date">Jun 2025 &ndash; Oct 2025 &nbsp;·&nbsp; 5 mos</div>
          <div class="timeline-role">Technical Lead of Special Projects</div>
          <div class="timeline-company">Prescient Security &nbsp;·&nbsp; Full-time &nbsp;·&nbsp; Remote</div>
          <ul class="timeline-bullets">
            <li>Rolled out phishing engagement tooling and supporting infrastructure across the business.</li>
            <li>Led high-priority, cross-team security projects and implemented policies for new service offerings.</li>
            <li>Worked directly with Directors and Seniors company-wide as a floating technical authority.</li>
          </ul>
          <div class="exp-tags mt-2">
            <span class="tag">Leadership</span>
            <span class="tag">Phishing Infrastructure</span>
            <span class="tag">Special Projects</span>
          </div>
        </div>
      </div>

      <!-- Prescient Security – Consultant -->
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-date">Sep 2022 &ndash; Jun 2025 &nbsp;·&nbsp; 2 yrs 10 mos</div>
          <div class="timeline-role">Security Consultant</div>
          <div class="timeline-company">Prescient Security &nbsp;·&nbsp; Full-time &nbsp;·&nbsp; Remote</div>
          <ul class="timeline-bullets">
            <li>Conducted 2–3 enterprise penetration tests per month across web, API, network, thick client, mobile, browser extensions, and RTO engagements.</li>
            <li>Created a new hire penetration tester interview lab and built private pentesting infrastructure.</li>
            <li>Developed custom tooling for complex web application and API pentests.</li>
            <li>Backed the Retest Core Team and later supported SOC2, PCI, and ISO compliance vAPT testing.</li>
            <li>Performed static and dynamic analysis on API application code bases.</li>
            <li>Authored professional penetration testing reports for enterprise clients.</li>
          </ul>
          <div class="exp-tags mt-2">
            <span class="tag">Web AppSec</span>
            <span class="tag">API Security</span>
            <span class="tag">Network Pentesting</span>
            <span class="tag">Mobile</span>
            <span class="tag">Thick Client</span>
            <span class="tag">SOC2</span>
            <span class="tag">PCI</span>
            <span class="tag">ISO</span>
            <span class="tag">Burp Suite Pro</span>
            <span class="tag">Nmap</span>
            <span class="tag">Postman</span>
            <span class="tag-pink tag">Static Analysis</span>
          </div>
        </div>
      </div>

      <!-- Cointelegraph -->
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-date">Mar 2022 &ndash; Aug 2022 &nbsp;·&nbsp; 6 mos</div>
          <div class="timeline-role">Technical Lead of Offensive Security</div>
          <div class="timeline-company">Cointelegraph &nbsp;·&nbsp; Full-time &nbsp;·&nbsp; United States</div>
          <ul class="timeline-bullets">
            <li>Built a SecOps department from the ground up, reporting directly to the CTO and Head of DevOps.</li>
            <li>Conducted penetration tests and red team operations on CTO request; delivered findings to executive leadership.</li>
            <li>Trained QA Engineers transitioning to penetration testing and automation roles.</li>
            <li>Created on-the-fly pentesting tools to automate Agile security workflows and Jira ticketing.</li>
            <li>Identified, developed, and exploited high-risk vulnerabilities and CVEs across AWS S3, EC2 Instances, and React Native apps.</li>
          </ul>
          <div class="exp-tags mt-2">
            <span class="tag">Offensive Security</span>
            <span class="tag">Red Team</span>
            <span class="tag">AWS S3 / EC2</span>
            <span class="tag">React Native</span>
            <span class="tag">CVE Research</span>
            <span class="tag-pink tag">SecOps Build-Out</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<hr class="trans-stripe m-0">

<!-- ─── Certifications ────────────────────────────────────────────────────── -->
<section id="certifications">
  <div class="container">
    <div class="mb-5 reveal">
      <span class="section-label">// certifications</span>
      <h2 class="section-title">Earned, Not Collected</h2>
    </div>

    <div class="certs-grid">

      <div class="cert-card reveal">
        <div class="cert-icon"><i class="fa-solid fa-server"></i></div>
        <div class="cert-abbr">CRTID</div>
        <div class="cert-name">Certified Red Team Infrastructure Developer</div>
        <div class="cert-issuer">Zero-Point Security</div>
        <div class="cert-date">May 2025</div>
      </div>

      <div class="cert-card reveal">
        <div class="cert-icon"><i class="fa-solid fa-globe"></i></div>
        <div class="cert-abbr">eWPT</div>
        <div class="cert-name">Web Application Penetration Tester</div>
        <div class="cert-issuer">eLearnSecurity</div>
        <div class="cert-date">January 2023</div>
      </div>

      <div class="cert-card reveal">
        <div class="cert-icon"><i class="fa-solid fa-user-secret"></i></div>
        <div class="cert-abbr">eCPPT</div>
        <div class="cert-name">Certified Professional Penetration Tester</div>
        <div class="cert-issuer">eLearnSecurity</div>
        <div class="cert-date">June 2022</div>
      </div>

      <div class="cert-card reveal">
        <div class="cert-icon"><i class="fa-solid fa-bolt"></i></div>
        <div class="cert-abbr">eJPT</div>
        <div class="cert-name">Junior Penetration Tester</div>
        <div class="cert-issuer">eLearnSecurity</div>
        <div class="cert-date">May 2021</div>
      </div>

    </div>
  </div>
</section>

<hr class="trans-stripe m-0">

<!-- ─── Skills ────────────────────────────────────────────────────────────── -->
<section id="skills">
  <div class="container">
    <div class="mb-5 reveal">
      <span class="section-label">// skills</span>
      <h2 class="section-title">Technical Arsenal</h2>
    </div>

    <div class="skills-grid">

      <div class="reveal">
        <div class="skill-group-title">// offensive security</div>
        <div class="skill-tags">
          <span class="skill-tag highlight-blue">Red Team Operations</span>
          <span class="skill-tag highlight-blue">Web Pentesting</span>
          <span class="skill-tag highlight-blue">Mobile Pentesting</span>
          <span class="skill-tag highlight-blue">Thick Client Pentesting</span>
          <span class="skill-tag highlight-blue">API Pentesting</span>
          <span class="skill-tag highlight-blue">Internal Network Pentesting</span>
          <span class="skill-tag highlight-blue">External Network Pentesting</span>
          <span class="skill-tag highlight-blue">Active Directory Pentesting</span>
          <span class="skill-tag highlight-blue">Cloud Pentesting</span>
          <span class="skill-tag highlight-blue">Browser Extension Pentesting</span>
          <span class="skill-tag highlight-blue">Phishing Ops</span>
          <span class="skill-tag highlight-blue">CVE Research (16 CVEs)</span>
        </div>
      </div>

      <div class="reveal">
        <div class="skill-group-title">// web &amp; api tools</div>
        <div class="skill-tags">
          <span class="skill-tag">Burp Suite Pro</span>
          <span class="skill-tag">Caido</span>
          <span class="skill-tag">SQLMap</span>
          <span class="skill-tag">FFUF</span>
          <span class="skill-tag">Gobuster</span>
          <span class="skill-tag">Feroxbuster</span>
          <span class="skill-tag">Nuclei</span>
          <span class="skill-tag">Nikto</span>
          <span class="skill-tag">XSStrike</span>
          <span class="skill-tag">jwt_tool</span>
          <span class="skill-tag">Postman</span>
          <span class="skill-tag">ReadyAPI</span>
          <span class="skill-tag">Insomnia</span>
          <span class="skill-tag">wfuzz</span>
        </div>
      </div>

      <div class="reveal">
        <div class="skill-group-title">// network &amp; active directory</div>
        <div class="skill-tags">
          <span class="skill-tag">Nmap</span>
          <span class="skill-tag">Masscan</span>
          <span class="skill-tag">Wireshark</span>
          <span class="skill-tag">tcpdump</span>
          <span class="skill-tag">Impacket</span>
          <span class="skill-tag">BloodHound</span>
          <span class="skill-tag">SharpHound</span>
          <span class="skill-tag">CrackMapExec</span>
          <span class="skill-tag">NetExec</span>
          <span class="skill-tag">Responder</span>
          <span class="skill-tag">Evil-WinRM</span>
          <span class="skill-tag">Kerbrute</span>
          <span class="skill-tag">Rubeus</span>
          <span class="skill-tag">Mimikatz</span>
          <span class="skill-tag">PowerView</span>
          <span class="skill-tag">enum4linux</span>
          <span class="skill-tag">ldapdomaindump</span>
        </div>
      </div>

      <div class="reveal">
        <div class="skill-group-title">// mobile &amp; reverse engineering</div>
        <div class="skill-tags">
          <span class="skill-tag">Jadx</span>
          <span class="skill-tag">Frida</span>
          <span class="skill-tag">objection</span>
          <span class="skill-tag">apktool</span>
          <span class="skill-tag">MobSF</span>
          <span class="skill-tag">ADB</span>
          <span class="skill-tag">Drozer</span>
          <span class="skill-tag">dex2jar</span>
          <span class="skill-tag">Ghidra</span>
          <span class="skill-tag">IDA Pro</span>
          <span class="skill-tag">dnSpy</span>
          <span class="skill-tag">x64dbg</span>
          <span class="skill-tag">PE Studio</span>
          <span class="skill-tag">ProcMon</span>
          <span class="skill-tag">API Monitor</span>
        </div>
      </div>

      <div class="reveal">
        <div class="skill-group-title">// red team &amp; c2</div>
        <div class="skill-tags">
          <span class="skill-tag highlight-blue">Cobalt Strike</span>
          <span class="skill-tag highlight-blue">Havoc</span>
          <span class="skill-tag highlight-blue">Sliver</span>
          <span class="skill-tag highlight-blue">Metasploit</span>
          <span class="skill-tag highlight-blue">msfvenom</span>
          <span class="skill-tag highlight-blue">Ligolo-ng</span>
          <span class="skill-tag highlight-blue">Chisel</span>
          <span class="skill-tag highlight-blue">proxychains</span>
          <span class="skill-tag highlight-blue">Covenant</span>
          <span class="skill-tag highlight-blue">Mythic</span>
        </div>
      </div>

      <div class="reveal">
        <div class="skill-group-title">// cloud &amp; infrastructure</div>
        <div class="skill-tags">
          <span class="skill-tag highlight-pink">AWS CLI</span>
          <span class="skill-tag highlight-pink">Pacu</span>
          <span class="skill-tag highlight-pink">ScoutSuite</span>
          <span class="skill-tag highlight-pink">enumerate-iam</span>
          <span class="skill-tag highlight-pink">Prowler</span>
          <span class="skill-tag highlight-pink">Proxmox</span>
          <span class="skill-tag highlight-pink">pfSense</span>
          <span class="skill-tag highlight-pink">Docker</span>
          <span class="skill-tag highlight-pink">Linux Admin</span>
          <span class="skill-tag highlight-pink">DevOps / CI-CD</span>
          <span class="skill-tag highlight-pink">MySQL</span>
          <span class="skill-tag highlight-pink">Stripe</span>
        </div>
      </div>

      <div class="reveal">
        <div class="skill-group-title">// password &amp; credential attacks</div>
        <div class="skill-tags">
          <span class="skill-tag">Hashcat</span>
          <span class="skill-tag">John the Ripper</span>
          <span class="skill-tag">Hydra</span>
          <span class="skill-tag">CrackStation</span>
          <span class="skill-tag">Spray</span>
          <span class="skill-tag">Medusa</span>
        </div>
      </div>

      <div class="reveal">
        <div class="skill-group-title">// compliance</div>
        <div class="skill-tags">
          <span class="skill-tag">SOC2</span>
          <span class="skill-tag">PCI DSS</span>
          <span class="skill-tag">ISO 27001</span>
          <span class="skill-tag">vAPT</span>
          <span class="skill-tag">Report Writing</span>
          <span class="skill-tag">Risk Assessment</span>
          <span class="skill-tag">Gap Analysis</span>
          <span class="skill-tag">Remediation Validation</span>
        </div>
      </div>

      <div class="reveal">
        <div class="skill-group-title">// development</div>
        <div class="skill-tags">
          <span class="skill-tag">Python</span>
          <span class="skill-tag">Bash</span>
          <span class="skill-tag">PowerShell</span>
          <span class="skill-tag">PHP</span>
          <span class="skill-tag">JavaScript</span>
          <span class="skill-tag">React Native</span>
          <span class="skill-tag">C / C++</span>
          <span class="skill-tag">Go</span>
          <span class="skill-tag">Custom Tooling</span>
          <span class="skill-tag">PoC Development</span>
        </div>
      </div>

      <div class="reveal">
        <div class="skill-group-title">// leadership &amp; education</div>
        <div class="skill-tags">
          <span class="skill-tag highlight-pink">CTF Design</span>
          <span class="skill-tag highlight-pink">Lab Development</span>
          <span class="skill-tag highlight-pink">Cert Programs</span>
          <span class="skill-tag highlight-pink">Security Training</span>
          <span class="skill-tag highlight-pink">Team Leadership</span>
          <span class="skill-tag highlight-pink">Client Consulting</span>
          <span class="skill-tag highlight-pink">Executive Reporting</span>
          <span class="skill-tag highlight-pink">Mentorship</span>
        </div>
      </div>

    </div>
  </div>
</section>

<hr class="trans-stripe m-0">

<!-- ─── Projects ──────────────────────────────────────────────────────────── -->
<section id="projects">
  <div class="container">
    <div class="mb-5 reveal">
      <span class="section-label">// projects</span>
      <h2 class="section-title">Things I've Built</h2>
    </div>

    <div class="projects-grid">

      <div class="project-card reveal">
        <div class="project-icon-wrap"><i class="fa-solid fa-lock"></i></div>
        <div class="project-name">Lorikeet Security Platform</div>
        <div class="project-desc">
          Full-stack cybersecurity SaaS built from the ground up: CTF event hosting,
          on-demand lab provisioning, automated grading, team scoring, billing, and
          managed security service delivery (PTaaS / SOCaaS). Serves both training
          clients and enterprise security engagements.
        </div>
        <div class="exp-tags">
          <span class="tag">PHP</span>
          <span class="tag">MySQL</span>
          <span class="tag">AWS</span>
          <span class="tag">Proxmox</span>
          <span class="tag">Stripe</span>
          <span class="tag-pink tag">SaaS</span>
        </div>
        <div class="project-links">
          <a href="https://lorikeetsecurity.com" target="_blank" rel="noopener" class="project-link">
            <i class="fa-solid fa-arrow-up-right-from-square"></i> lorikeetsecurity.com
          </a>
        </div>
      </div>

      <div class="project-card reveal">
        <div class="project-icon-wrap"><i class="fa-solid fa-flag"></i></div>
        <div class="project-name">Parrot CTFs</div>
        <div class="project-desc">
          Built the Parrot CTFs platform from scratch: a full-stack cybersecurity
          training and competition platform hosting CTF events, vulnerable lab machines,
          and community challenges. Grew it from a solo project into a recognized platform
          in the security community before evolving it into Lorikeet Security.
        </div>
        <div class="exp-tags">
          <span class="tag">CTF Platform</span>
          <span class="tag">Lab Machines</span>
          <span class="tag">Community</span>
          <span class="tag-pink tag">Founder</span>
        </div>
        <div class="project-links">
          <a href="https://lorikeetsecurity.com" target="_blank" rel="noopener" class="project-link">
            <i class="fa-solid fa-arrow-up-right-from-square"></i> Now: Lorikeet Security
          </a>
        </div>
      </div>

      <div class="project-card reveal">
        <div class="project-icon-wrap"><i class="fa-solid fa-magnifying-glass"></i></div>
        <div class="project-name">Parrot Recon</div>
        <div class="project-desc">
          An OSINT and reconnaissance tool built for penetration testers and red teamers.
          Designed to streamline the initial intelligence-gathering phase of security
          engagements, automating data collection across multiple public sources.
        </div>
        <div class="exp-tags">
          <span class="tag">Python</span>
          <span class="tag">OSINT</span>
          <span class="tag">Recon</span>
          <span class="tag-pink tag">Red Team</span>
        </div>
        <div class="project-links">
          <a href="https://github.com/parrotassassin15/parrot-recon" target="_blank" rel="noopener" class="project-link">
            <i class="fa-brands fa-github"></i> parrotassassin15/parrot-recon
          </a>
        </div>
      </div>

      <div class="project-card reveal">
        <div class="project-icon-wrap"><i class="fa-solid fa-flask"></i></div>
        <div class="project-name">Parrot CTFs Micro Labs</div>
        <div class="project-desc">
          A library of bite-sized, self-contained security labs simulating real-world
          attack vectors. Covers web exploitation, network attacks, malware analysis,
          reverse engineering, and more. Used by hundreds of students as hands-on
          preparation for professional certifications.
        </div>
        <div class="exp-tags">
          <span class="tag">Docker</span>
          <span class="tag">CTF Design</span>
          <span class="tag">Education</span>
          <span class="tag-pink tag">50+ Labs</span>
        </div>
        <div class="project-links">
          <a href="https://lorikeetsecurity.com/training" target="_blank" rel="noopener" class="project-link">
            <i class="fa-solid fa-arrow-up-right-from-square"></i> Training Portal
          </a>
        </div>
      </div>

      <div class="project-card reveal">
        <div class="project-icon-wrap"><i class="fa-solid fa-clipboard-list"></i></div>
        <div class="project-name">Pentest Interview Lab</div>
        <div class="project-desc">
          Purpose-built lab environment used by Prescient Security to evaluate penetration
          tester candidates. Simulates realistic engagement conditions and assesses
          technical depth across web, API, and network attack surfaces.
        </div>
        <div class="exp-tags">
          <span class="tag">Lab Design</span>
          <span class="tag">Web AppSec</span>
          <span class="tag">Hiring</span>
          <span class="tag-pink tag">Internal Tool</span>
        </div>
      </div>

      <div class="project-card reveal">
        <div class="project-icon-wrap"><i class="fa-solid fa-fish"></i></div>
        <div class="project-name">Phishing Engagement Platform</div>
        <div class="project-desc">
          Designed and deployed a complete phishing simulation and infrastructure toolkit
          for Prescient Security's red team engagements. Includes campaign management,
          tracking, and post-engagement reporting capabilities.
        </div>
        <div class="exp-tags">
          <span class="tag">Phishing Infra</span>
          <span class="tag">Red Team</span>
          <span class="tag">Social Eng.</span>
          <span class="tag-pink tag">Internal Tool</span>
        </div>
      </div>

    </div>
  </div>
</section>

<hr class="trans-stripe m-0">

<!-- ─── CVEs ─────────────────────────────────────────────────────────────── -->
<section id="cves">
  <div class="container">
    <div class="mb-5 reveal">
      <span class="section-label">// vulnerability research</span>
      <h2 class="section-title">CVEs Discovered</h2>
      <p class="section-subtitle">16 CVEs assigned across FastNetMon Community Edition, covering memory corruption, command injection, authentication bypass, and more. Full write-up at <a href="https://lorikeetsecurity.com/blog" target="_blank" rel="noopener">lorikeetsecurity.com/blog</a>.</p>
    </div>

    <div class="cve-target-label reveal">
      <i class="fa-solid fa-crosshairs"></i>
      FastNetMon Community Edition &nbsp;·&nbsp; May 23, 2026 &nbsp;·&nbsp; 16 CVEs
    </div>

    <div class="cve-table reveal">
      <div class="cve-row cve-header">
        <span>CVE ID</span>
        <span>Vulnerability</span>
        <span>Severity</span>
      </div>

      <div class="cve-row">
        <span class="cve-id">CVE-2026-48686</span>
        <span class="cve-title">BGP NLRI Decoder Stack Overflow</span>
        <span><span class="sev-badge sev-critical">Critical 9.8</span></span>
      </div>
      <div class="cve-row">
        <span class="cve-id">CVE-2026-48689</span>
        <span class="cve-title">Dynamic Buffer Off-by-One Heap Overflow</span>
        <span><span class="sev-badge sev-critical">Critical 9.8</span></span>
      </div>
      <div class="cve-row">
        <span class="cve-id">CVE-2026-48692</span>
        <span class="cve-title">gRPC API Missing Authentication</span>
        <span><span class="sev-badge sev-critical">Critical</span></span>
      </div>
      <div class="cve-row">
        <span class="cve-id">CVE-2026-48695</span>
        <span class="cve-title">MikroTik Plugin Command Injection + Hardcoded Credentials</span>
        <span><span class="sev-badge sev-critical">Critical</span></span>
      </div>
      <div class="cve-row">
        <span class="cve-id">CVE-2026-48682</span>
        <span class="cve-title">IPv4 Parser Out-of-Bounds Read</span>
        <span><span class="sev-badge sev-high">High</span></span>
      </div>
      <div class="cve-row">
        <span class="cve-id">CVE-2026-48683</span>
        <span class="cve-title">NetFlow v9 Data Flowset Buffer Overflow (unauthenticated UDP)</span>
        <span><span class="sev-badge sev-high">High</span></span>
      </div>
      <div class="cve-row">
        <span class="cve-id">CVE-2026-48684</span>
        <span class="cve-title">NetFlow v9 Options Template Parser Out-of-Bounds Read</span>
        <span><span class="sev-badge sev-high">High</span></span>
      </div>
      <div class="cve-row">
        <span class="cve-id">CVE-2026-48687</span>
        <span class="cve-title">Juniper Plugin OS Command Injection</span>
        <span><span class="sev-badge sev-high">High</span></span>
      </div>
      <div class="cve-row">
        <span class="cve-id">CVE-2026-48688</span>
        <span class="cve-title">BGP MP_REACH_NLRI IPv6 Decoder Out-of-Bounds Read</span>
        <span><span class="sev-badge sev-high">High</span></span>
      </div>
      <div class="cve-row">
        <span class="cve-id">CVE-2026-48690</span>
        <span class="cve-title">Packet Capture Buffer Integer Overflow</span>
        <span><span class="sev-badge sev-high">High</span></span>
      </div>
      <div class="cve-row">
        <span class="cve-id">CVE-2026-48691</span>
        <span class="cve-title">BGP AS_PATH Attribute Length Integer Overflow</span>
        <span><span class="sev-badge sev-high">High</span></span>
      </div>
      <div class="cve-row">
        <span class="cve-id">CVE-2026-48693</span>
        <span class="cve-title">Symlink Following Arbitrary File Write</span>
        <span><span class="sev-badge sev-high">High</span></span>
      </div>
      <div class="cve-row">
        <span class="cve-id">CVE-2026-48694</span>
        <span class="cve-title">Juniper NETCONF Plugin Configuration Injection</span>
        <span><span class="sev-badge sev-high">High</span></span>
      </div>
      <div class="cve-row">
        <span class="cve-id">CVE-2026-48696</span>
        <span class="cve-title">ExaBGP Handler sprintf Stack Buffer Overflow</span>
        <span><span class="sev-badge sev-high">High</span></span>
      </div>
      <div class="cve-row">
        <span class="cve-id">CVE-2026-48685</span>
        <span class="cve-title">BGP Attribute Two-Byte Length Field Truncation</span>
        <span><span class="sev-badge sev-medium">Medium</span></span>
      </div>
      <div class="cve-row">
        <span class="cve-id">CVE-2026-48697</span>
        <span class="cve-title">Missing TLS Peer Verification</span>
        <span><span class="sev-badge sev-medium">Medium</span></span>
      </div>
    </div>
  </div>
</section>


<!-- ─── Footer ────────────────────────────────────────────────────────────── -->
<footer>
  <div class="container">
    <div class="footer-socials">
      <a href="https://www.linkedin.com/in/ryan-wilke-8299b71b2" target="_blank" rel="noopener"
         class="footer-social-link" aria-label="LinkedIn">
        <i class="fa-brands fa-linkedin-in"></i>
      </a>
      <a href="https://github.com/parrotassassin15" target="_blank" rel="noopener"
         class="footer-social-link" aria-label="GitHub">
        <i class="fa-brands fa-github"></i>
      </a>
      <a href="https://www.instagram.com/parrotassassin15/" target="_blank" rel="noopener"
         class="footer-social-link" aria-label="Instagram">
        <i class="fa-brands fa-instagram"></i>
      </a>
      <a href="https://www.tiktok.com/@parrotassassin15" target="_blank" rel="noopener"
         class="footer-social-link" aria-label="TikTok">
        <i class="fa-brands fa-tiktok"></i>
      </a>
      <a href="https://keybase.io/parrotassassin15" target="_blank" rel="noopener"
         class="footer-social-link" aria-label="Keybase">
        <i class="fa-solid fa-key"></i>
      </a>
      <a href="mailto:rwilke@lorikeetsecurity.com"
         class="footer-social-link" aria-label="Email">
        <i class="fa-solid fa-envelope"></i>
      </a>
    </div>
    <div class="footer-brand">
      <span>Ryan Wilke</span> &nbsp;·&nbsp; Cybersecurity Professional
    </div>
    <div class="footer-muted mt-1">
      &copy; <?php echo date('Y'); ?> Ryan Wilke &nbsp;·&nbsp; Kissimmee, FL
      &nbsp;·&nbsp; Built with a LAMP stack &amp; Bootstrap
    </div>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/main.js"></script>
</body>
</html>
