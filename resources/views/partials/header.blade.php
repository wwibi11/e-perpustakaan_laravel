<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="web_dashboard" name="shell-type"/>
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title', 'E-Perpustakaan')</title>

<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>

<script src="https://cdn.tailwindcss.com"></script>
<script id="tailwind-config">
tailwind.config={
    darkMode:"class",
    theme:{
        extend:{
            colors:{
                "surface-container-highest":"#d3e4fe","on-secondary-container":"#5c647a","error-container":"#ffdad6","on-secondary-fixed":"#131b2e","inverse-primary":"#b6c4ff","primary":"#00236f","tertiary":"#00246b","on-surface-variant":"#444651","tertiary-container":"#00389a","secondary-fixed-dim":"#bec6e0","surface-variant":"#d3e4fe","primary-container":"#1e3a8a","surface-container-lowest":"#ffffff","on-background":"#0b1c30","background":"#f8f9ff","surface-tint":"#4059aa","primary-fixed":"#dce1ff","on-error-container":"#93000a","surface-container":"#e5eeff","on-error":"#ffffff","on-tertiary-fixed":"#00174b","secondary-fixed":"#dae2fd","secondary-container":"#dae2fd","inverse-on-surface":"#eaf1ff","surface":"#f8f9ff","on-primary-container":"#90a8ff","on-tertiary-fixed-variant":"#003ea8","on-surface":"#0b1c30","on-primary-fixed":"#00164e","outline-variant":"#c5c5d3","outline":"#757682","on-tertiary":"#ffffff","tertiary-fixed":"#dbe1ff","surface-container-low":"#eff4ff","tertiary-fixed-dim":"#b4c5ff","surface-bright":"#f8f9ff","secondary":"#565e74","surface-dim":"#cbdbf5","primary-fixed-dim":"#b6c4ff","on-secondary":"#ffffff","on-tertiary-container":"#8da9ff","on-primary-fixed-variant":"#264191","on-primary":"#ffffff","error":"#ba1a1a","inverse-surface":"#213145","surface-container-high":"#dce9ff","on-secondary-fixed-variant":"#3f465c"
            },
            borderRadius:{DEFAULT:"0.125rem",lg:"0.25rem",xl:"0.5rem",full:"0.75rem"},
            spacing:{"space-sm":"0.5rem","margin":"1.5rem","space-lg":"1rem","gutter":"1rem","space-xs":"0.25rem","space-md":"0.75rem","space-2xl":"2rem","space-xl":"1.5rem"},
            fontFamily:{"title-md":["Plus Jakarta Sans"],"headline-md":["Plus Jakarta Sans"],"label-sm":["Plus Jakarta Sans"],"data-mono":["JetBrains Mono"],"body-md":["Plus Jakarta Sans"],"headline-sm":["Plus Jakarta Sans"],"body-lg":["Plus Jakarta Sans"],"label-md":["Plus Jakarta Sans"],"headline-lg":["Plus Jakarta Sans"],"body-sm":["Plus Jakarta Sans"],"title-sm":["Plus Jakarta Sans"],"headline-xl":["Plus Jakarta Sans"]},
            fontSize:{"title-md":["1rem",{lineHeight:"1.5rem",fontWeight:"600"}],"headline-md":["1.25rem",{lineHeight:"1.75rem",letterSpacing:"-0.015em",fontWeight:"600"}],"label-sm":["0.75rem",{lineHeight:"1rem",letterSpacing:"0.025em",fontWeight:"600"}],"data-mono":["0.8125rem",{lineHeight:"1.125rem",letterSpacing:"0.02em",fontWeight:"500"}],"body-md":["0.875rem",{lineHeight:"1.25rem",fontWeight:"400"}],"headline-sm":["1.125rem",{lineHeight:"1.5rem",letterSpacing:"-0.01em",fontWeight:"600"}],"body-lg":["1rem",{lineHeight:"1.5rem",fontWeight:"400"}],"label-md":["0.875rem",{lineHeight:"1.25rem",fontWeight:"500"}],"headline-lg":["1.5rem",{lineHeight:"2rem",letterSpacing:"-0.02em",fontWeight:"700"}],"body-sm":["0.8125rem",{lineHeight:"1.125rem",fontWeight:"400"}],"title-sm":["0.875rem",{lineHeight:"1.25rem",fontWeight:"600"}],"headline-xl":["2rem",{lineHeight:"2.5rem",letterSpacing:"-0.025em",fontWeight:"700"}]}
        }
    }
};
</script>

<style>
    @layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}
    ::-webkit-scrollbar{display:none;}
</style>