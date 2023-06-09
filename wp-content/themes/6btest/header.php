<!doctype html>
<html>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body>

<div id="page" class="site">
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

                <header class="bg-white">
                    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
                        <div class="flex pr-12">
                            <a href="#" class="-m-1.5 p-1.5">
                                <span class="sr-only">Your Company</span>
                                <svg width="147" height="32" viewBox="0 0 147 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.73046 25.2213C7.66301 25.2057 6.61115 25.011 5.57487 24.637C4.54638 24.263 3.6114 23.6396 2.76991 22.767C1.92842 21.8943 1.25444 20.7217 0.747991 19.2491C0.24933 17.7765 0 15.9377 0 13.7327C0 11.6445 0.206477 9.79011 0.61943 8.16947C1.04018 6.54882 1.64402 5.1814 2.43097 4.0672C3.21792 2.94522 4.16849 2.09204 5.28269 1.50767C6.39688 0.923301 7.64743 0.631117 9.03433 0.631117C10.4602 0.631117 11.7263 0.911614 12.8327 1.47261C13.9391 2.0336 14.8352 2.80886 15.5208 3.79839C16.2143 4.78792 16.6545 5.91381 16.8415 7.17604H13.2768C13.0353 6.17872 12.5561 5.3645 11.8393 4.73338C11.1225 4.10226 10.1875 3.78671 9.03433 3.78671C7.28123 3.78671 5.91381 4.55028 4.93207 6.07743C3.95812 7.60458 3.46725 9.72778 3.45946 12.447H3.63477C4.04772 11.7692 4.55418 11.1926 5.15413 10.7173C5.76187 10.2342 6.43974 9.86413 7.18773 9.60701C7.94351 9.3421 8.73825 9.20964 9.57195 9.20964C10.9589 9.20964 12.2133 9.54858 13.3353 10.2264C14.4651 10.8965 15.365 11.8237 16.0351 13.008C16.7051 14.1924 17.0402 15.5481 17.0402 17.0752C17.0402 18.6024 16.6935 19.9854 16 21.2243C15.3143 22.4631 14.3482 23.4449 13.1015 24.1695C11.8549 24.8863 10.3979 25.2369 8.73046 25.2213ZM8.71877 22.1826C9.63818 22.1826 10.4602 21.9567 11.1848 21.5047C11.9094 21.0528 12.4821 20.4451 12.9028 19.6815C13.3236 18.9179 13.534 18.0648 13.534 17.122C13.534 16.2026 13.3275 15.365 12.9145 14.6092C12.5094 13.8534 11.9484 13.2535 11.2316 12.8094C10.5225 12.3652 9.7122 12.1432 8.80058 12.1432C8.10713 12.1432 7.46433 12.2756 6.87217 12.5405C6.2878 12.8055 5.77356 13.1717 5.32944 13.6392C4.88532 14.1066 4.5347 14.6443 4.27757 15.252C4.02824 15.852 3.90358 16.487 3.90358 17.157C3.90358 18.0531 4.11006 18.8829 4.52301 19.6465C4.94375 20.41 5.51644 21.0256 6.24105 21.4931C6.97346 21.9528 7.79937 22.1826 8.71877 22.1826Z" fill="#101828"/>
                                    <path d="M21.6245 24.8941V0.958364H30.3901C32.0886 0.958364 33.495 1.23886 34.6092 1.79985C35.7234 2.35306 36.5571 3.10494 37.1103 4.05552C37.6635 4.9983 37.9401 6.06185 37.9401 7.24616C37.9401 8.24349 37.757 9.08498 37.3908 9.77063C37.0246 10.4485 36.5337 10.9939 35.9182 11.4069C35.3104 11.812 34.6404 12.1081 33.908 12.2951V12.5289C34.7027 12.5678 35.478 12.8249 36.2337 13.3002C36.9973 13.7677 37.6284 14.4339 38.1271 15.2988C38.6258 16.1636 38.8751 17.2155 38.8751 18.4543C38.8751 19.6776 38.5868 20.7762 38.0102 21.7502C37.4414 22.7163 36.561 23.4838 35.3689 24.0526C34.1768 24.6136 32.6535 24.8941 30.7991 24.8941H21.6245ZM25.2359 21.7969H30.4485C32.1782 21.7969 33.4171 21.4619 34.1651 20.7918C34.9131 20.1217 35.2871 19.2841 35.2871 18.279C35.2871 17.5233 35.0962 16.8298 34.7144 16.1987C34.3326 15.5676 33.7872 15.065 33.0782 14.691C32.3769 14.317 31.5432 14.13 30.5771 14.13H25.2359V21.7969ZM25.2359 11.3134H30.0745C30.8848 11.3134 31.6133 11.1575 32.26 10.8459C32.9145 10.5342 33.4327 10.0979 33.8145 9.53689C34.204 8.9681 34.3988 8.29803 34.3988 7.52666C34.3988 6.53713 34.0521 5.70733 33.3587 5.03725C32.6652 4.36718 31.6017 4.03214 30.168 4.03214H25.2359V11.3134Z" fill="#101828"/>
                                    <path d="M59.6172 24.8941H51.8685V0.958364H59.8627C62.2079 0.958364 64.2221 1.43755 65.905 2.39591C67.588 3.34648 68.8775 4.7139 69.7736 6.49817C70.6774 8.27465 71.1293 10.4056 71.1293 12.8912C71.1293 15.3845 70.6735 17.5272 69.7619 19.3192C68.858 21.1113 67.5491 22.4904 65.8349 23.4565C64.1208 24.4149 62.0482 24.8941 59.6172 24.8941ZM55.4799 21.7385H59.4186C61.2418 21.7385 62.7572 21.3957 63.9649 20.71C65.1726 20.0166 66.0765 19.0153 66.6764 17.7064C67.2764 16.3896 67.5763 14.7845 67.5763 12.8912C67.5763 11.0134 67.2764 9.42002 66.6764 8.11103C66.0842 6.80205 65.1999 5.80862 64.0234 5.13075C62.8468 4.45289 61.3859 4.11395 59.6406 4.11395H55.4799V21.7385Z" fill="#101828"/>
                                    <path d="M75.3397 24.8941V6.94229H78.8342V24.8941H75.3397ZM77.1045 4.17239C76.4967 4.17239 75.9747 3.96981 75.5384 3.56465C75.1098 3.15169 74.8955 2.66082 74.8955 2.09204C74.8955 1.51546 75.1098 1.02459 75.5384 0.61943C75.9747 0.206477 76.4967 0 77.1045 0C77.7122 0 78.2303 0.206477 78.6589 0.61943C79.0952 1.02459 79.3134 1.51546 79.3134 2.09204C79.3134 2.66082 79.0952 3.15169 78.6589 3.56465C78.2303 3.96981 77.7122 4.17239 77.1045 4.17239Z" fill="#101828"/>
                                    <path d="M91.0621 32C89.6362 32 88.4091 31.813 87.3806 31.439C86.3599 31.065 85.5262 30.5702 84.8795 29.9547C84.2328 29.3392 83.7497 28.6652 83.4302 27.9328L86.4339 26.6939C86.6443 27.0368 86.9248 27.3991 87.2754 27.7809C87.6338 28.1704 88.1169 28.5016 88.7246 28.7743C89.3402 29.047 90.131 29.1833 91.0972 29.1833C92.4217 29.1833 93.5164 28.86 94.3813 28.2133C95.2462 27.5744 95.6786 26.5537 95.6786 25.1512V21.6216H95.4565C95.2462 22.0034 94.9423 22.4281 94.5449 22.8955C94.1553 23.363 93.6177 23.7682 92.9321 24.111C92.2464 24.4539 91.3543 24.6253 90.2557 24.6253C88.8376 24.6253 87.5598 24.2941 86.4222 23.6318C85.2924 22.9618 84.3964 21.9761 83.7341 20.6749C83.0796 19.366 82.7524 17.757 82.7524 15.8481C82.7524 13.9391 83.0757 12.3029 83.7224 10.9394C84.3769 9.57585 85.2729 8.53178 86.4105 7.80716C87.5481 7.07475 88.8376 6.70855 90.279 6.70855C91.3932 6.70855 92.2932 6.89554 92.9788 7.26954C93.6645 7.63574 94.1982 8.06428 94.58 8.55515C94.9696 9.04602 95.2695 9.47845 95.4799 9.85245H95.737V6.94229H99.1614V25.2915C99.1614 26.8342 98.803 28.1003 98.0862 29.0898C97.3694 30.0794 96.3993 30.8118 95.176 31.2871C93.9606 31.7624 92.5892 32 91.0621 32ZM91.027 21.7268C92.0321 21.7268 92.8814 21.4931 93.5749 21.0256C94.2761 20.5503 94.8059 19.8724 95.1644 18.992C95.5306 18.1037 95.7137 17.0402 95.7137 15.8013C95.7137 14.5936 95.5345 13.5301 95.176 12.6107C94.8176 11.6913 94.2917 10.9744 93.5983 10.4602C92.9048 9.93816 92.0477 9.67714 91.027 9.67714C89.9752 9.67714 89.0986 9.94984 88.3974 10.4953C87.6961 11.0329 87.1663 11.7653 86.8079 12.6925C86.4573 13.6197 86.282 14.656 86.282 15.8013C86.282 16.9778 86.4612 18.0102 86.8196 18.8985C87.178 19.7867 87.7078 20.4802 88.4091 20.9788C89.1181 21.4775 89.9908 21.7268 91.027 21.7268Z" fill="#101828"/>
                                    <path d="M103.848 24.8941V6.94229H107.343V24.8941H103.848ZM105.613 4.17239C105.005 4.17239 104.483 3.96981 104.047 3.56465C103.618 3.15169 103.404 2.66082 103.404 2.09204C103.404 1.51546 103.618 1.02459 104.047 0.61943C104.483 0.206477 105.005 0 105.613 0C106.221 0 106.739 0.206477 107.167 0.61943C107.604 1.02459 107.822 1.51546 107.822 2.09204C107.822 2.66082 107.604 3.15169 107.167 3.56465C106.739 3.96981 106.221 4.17239 105.613 4.17239Z" fill="#101828"/>
                                    <path d="M120.424 6.94229V9.74726H110.618V6.94229H120.424ZM113.248 2.64134H116.742V19.6231C116.742 20.301 116.843 20.8113 117.046 21.1541C117.249 21.4892 117.51 21.719 117.829 21.8437C118.156 21.9606 118.511 22.019 118.893 22.019C119.173 22.019 119.419 21.9995 119.629 21.9606C119.839 21.9216 120.003 21.8904 120.12 21.8671L120.751 24.7538C120.548 24.8318 120.26 24.9097 119.886 24.9876C119.512 25.0733 119.045 25.12 118.484 25.1278C117.564 25.1434 116.707 24.9798 115.912 24.637C115.118 24.2941 114.475 23.7643 113.984 23.0475C113.493 22.3307 113.248 21.4307 113.248 20.3477V2.64134Z" fill="#101828"/>
                                    <path d="M129.514 25.2915C128.376 25.2915 127.347 25.0811 126.428 24.6603C125.509 24.2318 124.78 23.6124 124.243 22.802C123.713 21.9917 123.448 20.9983 123.448 19.8218C123.448 18.8089 123.643 17.9752 124.032 17.3207C124.422 16.6662 124.948 16.148 125.61 15.7663C126.272 15.3845 127.012 15.0962 127.831 14.9014C128.649 14.7066 129.482 14.5586 130.332 14.4573C131.407 14.3326 132.28 14.2313 132.95 14.1534C133.62 14.0677 134.107 13.9313 134.411 13.7443C134.714 13.5573 134.866 13.2535 134.866 12.8327V12.7509C134.866 11.7302 134.578 10.9394 134.001 10.3784C133.433 9.81738 132.583 9.53689 131.454 9.53689C130.277 9.53689 129.35 9.79791 128.672 10.3199C128.002 10.8342 127.538 11.4069 127.281 12.038L123.997 11.29C124.387 10.1992 124.955 9.31872 125.703 8.64865C126.459 7.97078 127.328 7.47991 128.31 7.17604C129.291 6.86438 130.324 6.70855 131.407 6.70855C132.124 6.70855 132.883 6.79425 133.686 6.96567C134.496 7.12929 135.252 7.43316 135.953 7.87728C136.662 8.3214 137.243 8.95642 137.695 9.78232C138.147 10.6004 138.373 11.664 138.373 12.973V24.8941H134.96V22.4397H134.82C134.594 22.8917 134.255 23.3358 133.803 23.7721C133.351 24.2084 132.77 24.5707 132.061 24.859C131.352 25.1473 130.503 25.2915 129.514 25.2915ZM130.273 22.4865C131.239 22.4865 132.065 22.2956 132.751 21.9138C133.444 21.532 133.97 21.0334 134.329 20.4178C134.695 19.7945 134.878 19.1283 134.878 18.4193V16.1052C134.753 16.2299 134.512 16.3467 134.153 16.4558C133.803 16.5571 133.402 16.6467 132.95 16.7246C132.498 16.7947 132.057 16.861 131.629 16.9233C131.2 16.9778 130.842 17.0246 130.554 17.0636C129.876 17.1493 129.256 17.2934 128.695 17.496C128.142 17.6986 127.698 17.9907 127.363 18.3725C127.036 18.7465 126.872 19.2452 126.872 19.8685C126.872 20.7334 127.192 21.3879 127.831 21.832C128.469 22.2683 129.284 22.4865 130.273 22.4865Z" fill="#101828"/>
                                    <path d="M146.522 0.958364V24.8941H143.027V0.958364H146.522Z" fill="#101828"/>
                                </svg>					
                            </a>
                        </div>
                        <div class="flex lg:hidden">
                            <button type="button" class="menu-toggle -m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                                <span class="sr-only">Open main menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </button>
                        </div>
                        <div class="hidden lg:flex lg:gap-x-12">
                            <div class="relative">
                                <button type="button" class="menu-parent flex items-center gap-x-1 text-base font-normal leading-6 text-gray-900">
                                    Product
                                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <!--
                                    'Product' flyout menu, show/hide based on flyout menu state.
                        
                                    Entering: "transition ease-out duration-200"
                                    From: "opacity-0 translate-y-1"
                                    To: "opacity-100 translate-y-0"
                                    Leaving: "transition ease-in duration-150"
                                    From: "opacity-100 translate-y-0"
                                    To: "opacity-0 translate-y-1"
                                -->
                                <div
                                    class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5" style="display: none;">
                                    <div class="p-4">
                                        <div
                                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                            <div
                                                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                                                </svg>
                                            </div>
                                            <div class="flex-auto">
                                                <a href="#" class="block font-semibold text-gray-900">
                                                    Analytics
                                                    <span class="absolute inset-0"></span>
                                                </a>
                                                <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
                                            </div>
                                        </div>
                                        <div
                                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                            <div
                                                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                                                </svg>
                                            </div>
                                            <div class="flex-auto">
                                                <a href="#" class="block font-semibold text-gray-900">
                                                    Engagement
                                                    <span class="absolute inset-0"></span>
                                                </a>
                                                <p class="mt-1 text-gray-600">Speak directly to your customers</p>
                                            </div>
                                        </div>
                                        <div
                                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                            <div
                                                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                                                </svg>
                                            </div>
                                            <div class="flex-auto">
                                                <a href="#" class="block font-semibold text-gray-900">
                                                    Security
                                                    <span class="absolute inset-0"></span>
                                                </a>
                                                <p class="mt-1 text-gray-600">Your customers’ data will be safe and secure</p>
                                            </div>
                                        </div>
                                        <div
                                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                            <div
                                                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                                                </svg>
                                            </div>
                                            <div class="flex-auto">
                                                <a href="#" class="block font-semibold text-gray-900">
                                                    Integrations
                                                    <span class="absolute inset-0"></span>
                                                </a>
                                                <p class="mt-1 text-gray-600">Connect with third-party tools</p>
                                            </div>
                                        </div>
                                        <div
                                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                            <div
                                                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                                </svg>
                                            </div>
                                            <div class="flex-auto">
                                                <a href="#" class="block font-semibold text-gray-900">
                                                    Automations
                                                    <span class="absolute inset-0"></span>
                                                </a>
                                                <p class="mt-1 text-gray-600">Build strategic funnels that will convert</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                                        <a href="#"
                                            class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                                            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.39-2.908a.75.75 0 01.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Watch demo
                                        </a>
                                        <a href="#"
                                            class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                                            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Contact sales
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
                        </div>
                        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span
                                    aria-hidden="true">&rarr;</span></a>
                        </div>
                    </nav>
                    <!-- Mobile menu, show/hide based on menu open state. -->
                    <div class="mobile-menu lg:hidden" role="dialog" aria-modal="true" style="display: none">
                        <!-- Background backdrop, show/hide based on slide-over state. -->
                        <div class="fixed inset-0 z-10"></div>
                        <div
                            class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                            <div class="flex items-center justify-between">
                                <a href="#" class="-m-1.5 p-1.5">
                                    <span class="sr-only">Your Company</span>
                                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                        alt="">
                                </a>
                                <button type="button" class="menu-toggle -m-2.5 rounded-md p-2.5 text-gray-700">
                                    <span class="sr-only">Close menu</span>
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="mt-6 flow-root">
                                <div class="-my-6 divide-y divide-gray-500/10">
                                    <div class="space-y-2 py-6">
                                        <div class="-mx-3">
                                            <button type="button"
                                                class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                                aria-controls="disclosure-1" aria-expanded="false">
                                                Product
                                                <!--
                                    Expand/collapse icon, toggle classes based on menu open state.
                
                                    Open: "rotate-180", Closed: ""
                                -->
                                                <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            <!-- 'Product' sub-menu, show/hide based on menu state. -->
                                            <div class="mt-2 space-y-2" id="disclosure-1">
                                                <a href="#"
                                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Analytics</a>
                                                <a href="#"
                                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Engagement</a>
                                                <a href="#"
                                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Security</a>
                                                <a href="#"
                                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Integrations</a>
                                                <a href="#"
                                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Automations</a>
                                                <a href="#"
                                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Watch
                                                    demo</a>
                                                <a href="#"
                                                    class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact
                                                    sales</a>
                                            </div>
                                        </div>
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                                    </div>
                                    <div class="py-6">
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                            in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>