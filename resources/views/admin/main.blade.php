<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="{{asset('assets/images/apple-touch-icon.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="{{asset('assets/images/favicon-32x32.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="{{asset('assets/images/favicon-16x16.png')}}"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/core.css')}}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('assets/styles/icon-font.min.css')}}"
		/>
		<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/style.css')}}" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
    <body class="login-page">
    	 @if(!Session::has('adminuserId'))
        <div class="login-header box-shadow">
            <div
                class="container-fluid d-flex justify-content-between align-items-center"
            >
                <div class="brand-logo">
                    <a href="login.html">
                        <img src="{{asset('assets/images/deskapp-logo.svg')}}" alt="" />
                    </a>
                </div>
                <div class="login-menu">
                    <ul>
                        <li>Welcome Uwnetwork</li>
                    </ul>
                </div>
            </div>
        </div>
        @endif

     @if(Session::has('adminuserId'))
		    @include('admin.header')
		    @include('admin.menu')
      @endif
	@yield('content');
   
  <!-- welcome modal start -->
        <div class="welcome-modal">
            <button class="welcome-modal-close">
                <i class="bi bi-x-lg"></i>
            </button>
            <iframe
                class="w-100 border-0"
                src="https://embed.lottiefiles.com/animation/31548"
            ></iframe>
            <div class="text-center">
                <h3 class="h5 weight-500 text-center mb-2">
                    Open source
                    <span role="img" aria-label="gratitude">❤️</span>
                </h3>
                <div class="pb-2">
                    <a
                        class="github-button"
                        href="https://github.com/dropways/deskapp"
                        data-color-scheme="no-preference: dark; light: light; dark: light;"
                        data-icon="octicon-star"
                        data-size="large"
                        data-show-count="true"
                        aria-label="Star dropways/deskapp dashboard on GitHub"
                        >Star</a
                    >
                    <a
                        class="github-button"
                        href="https://github.com/dropways/deskapp/fork"
                        data-color-scheme="no-preference: dark; light: light; dark: light;"
                        data-icon="octicon-repo-forked"
                        data-size="large"
                        data-show-count="true"
                        aria-label="Fork dropways/deskapp dashboard on GitHub"
                        >Fork</a
                    >
                </div>
            </div>
            <div class="text-center mb-1">
                <div>
                    <a
                        href="https://github.com/dropways/deskapp"
                        target="_blank"
                        class="btn btn-light btn-block btn-sm"
                    >
                        <span class="text-danger weight-600">STAR US</span>
                        <span class="weight-600">ON GITHUB</span>
                        <i class="fa fa-github"></i>
                    </a>
                </div>
                <script
                    async
                    defer="defer"
                    src="https://buttons.github.io/buttons.js"
                ></script>
            </div>
            <a
                href="https://github.com/dropways/deskapp"
                target="_blank"
                class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
            >
                DOWNLOAD
                <i class="fa fa-download"></i>
            </a>
            <p class="font-14 text-center mb-1 d-none d-md-block">
                Available in the following technologies:
            </p>
            <div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
                <i class="fa fa-html5"></i>
            </div>
        </div>
        <button class="welcome-modal-btn">
            <i class="fa fa-download"></i> Download
        </button>
        <!-- welcome modal end -->
        <!-- js -->
        <script src="{{asset('assets/scripts/core.js')}}"></script>
        <script src="{{asset('assets/scripts/script.min.js')}}"></script>
        <script src="{{asset('assets/scripts/process.js')}}"></script>
        <script src="{{asset('assets/scripts/layout-settings.js')}}"></script>
        <!-- Google Tag Manager (noscript) -->
        <noscript
            ><iframe
                src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
                height="0"
                width="0"
                style="display: none; visibility: hidden"
            ></iframe
        ></noscript>
        <!-- End Google Tag Manager (noscript) -->
    </body>
    
</html>
