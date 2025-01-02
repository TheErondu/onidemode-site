@extends('layouts.frontend.app')
@section('content')
    <!-- bread croumba rea start -->
    <div class="breadcrumb-area-bg bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb-area-inner">
                        <div class="breadcrumb-top">
                            <a href="#">Home</a> /
                            <a class="active" href="#">Meet the CEO</a>
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">Meet The CEO</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->


    <!-- team single main area start -->
    <div class="single-team-about-area rts-section-gap bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="thumbnail-left-team-about">
                        <img src="{{ $data[0]['images'][0]['src'] }}" alt="team">
                    </div>
                </div>
                <div class="col-lg-6 pl--60 pl_md--15 pl_sm--15 mt_sm--50 mt_md--50">
                    <div class="team-about-right-araea">
                        <div class="title-style-left">
                            <div class="pre-title-area">
                                <img src="assets/images/about/02.png" alt="about">
                                <span class="pre-title"> {{ $data[0]['profile']['education']['institution'] }}</span>
                            </div>
                            <h2 class="title"> {{ $data[0]['profile']['name'] }}</h2>
                        </div>
                        <p class="disc">
                            {{ $data[0]['profile']['description'] }}
                        </p>
                        <!-- team contact info area and experience -->
                        <div class="team-contact-info-about">
                            <!-- single contact  info -->
                            <div class="single-contact-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="34" viewBox="0 0 40 34"
                                    fill="none">
                                    <path
                                        d="M37.7223 8.38022L21.8092 1.42378C20.4102 0.812241 18.8047 0.81272 17.404 1.42497L1.49433 8.37982C0.572628 8.78265 0 9.66826 0 10.691C0 11.7132 0.572236 12.5983 1.49339 13.001L3.37403 13.8232C3.37207 13.8429 3.37105 13.8631 3.37105 13.8833V22.9609C2.64412 23.2114 2.11907 23.9131 2.11907 24.7381C2.11907 25.2163 2.29575 25.6531 2.58567 25.9848C2.265 26.3055 2.05209 26.7401 2.00811 27.2327L1.55755 32.2882C1.5268 32.6336 1.64065 32.9784 1.86984 33.2344C2.09904 33.4905 2.42549 33.6373 2.76541 33.6373H5.15036C5.49028 33.6373 5.81673 33.4905 6.04593 33.2344C6.2752 32.9784 6.38897 32.6335 6.35822 32.2882L5.90766 27.2327C5.86376 26.7402 5.65077 26.3055 5.3301 25.9848C5.62001 25.6532 5.7967 25.2164 5.7967 24.7381C5.7967 23.9132 5.27165 23.2115 4.54471 22.9609V14.3349L7.7559 15.7387C7.75395 15.7585 7.75293 15.7785 7.75293 15.7988V20.3692C7.75293 22.2767 9.0334 24.0413 11.3586 25.3381C13.5716 26.5724 16.5013 27.2521 19.6077 27.2521C22.7141 27.2521 25.6438 26.5724 27.8568 25.3381C30.1819 24.0413 31.4624 22.2767 31.4624 20.3692V15.7988C31.4624 15.7785 31.4614 15.7585 31.4595 15.7388L37.7213 13.0015C38.643 12.5986 39.2156 11.7129 39.2156 10.6902C39.2157 9.66803 38.6435 8.78289 37.7223 8.38022ZM5.17924 32.4271C5.16766 32.4401 5.15506 32.4401 5.15036 32.4401H2.76541C2.76063 32.4401 2.74811 32.4401 2.73653 32.4271C2.72487 32.4141 2.72605 32.4014 2.72644 32.3966L3.177 27.341C3.21401 26.9264 3.5497 26.6137 3.95792 26.6137C4.36607 26.6137 4.70176 26.9264 4.73877 27.341L5.18933 32.3966C5.1898 32.4014 5.1909 32.4141 5.17924 32.4271ZM3.95792 25.4165C3.59117 25.4165 3.2928 25.1122 3.2928 24.7381C3.2928 24.364 3.59117 24.0596 3.95792 24.0596C4.32468 24.0596 4.62304 24.364 4.62304 24.7381C4.62304 25.1122 4.32468 25.4165 3.95792 25.4165ZM30.2888 17.8152C30.2888 19.3631 29.0398 20.8744 26.862 21.9616C26.5708 22.1069 26.4504 22.4654 26.5929 22.7623C26.6947 22.9746 26.9034 23.098 27.1205 23.098C27.2071 23.098 27.295 23.0783 27.3781 23.0368C28.586 22.4338 29.5538 21.6992 30.2438 20.8824C30.0238 22.1447 28.9961 23.3384 27.2939 24.2878C25.2505 25.4274 22.5209 26.055 19.6078 26.055C16.6948 26.055 13.9652 25.4274 11.9218 24.2878C10.2258 23.3418 9.19913 22.1534 8.97409 20.896C9.5673 21.5935 10.3677 22.2314 11.3587 22.7841C13.5717 24.0184 16.5013 24.6982 19.6078 24.6982C20.4768 24.6982 21.3436 24.6442 22.184 24.5379C22.5056 24.4972 22.7341 24.1983 22.6941 23.8702C22.6542 23.542 22.3616 23.309 22.0395 23.3498C21.2469 23.4501 20.4287 23.5009 19.6078 23.5009C16.6947 23.5009 13.9651 22.8734 11.9217 21.7337C9.99039 20.6565 8.92675 19.265 8.92675 17.8152V16.2505L17.4065 19.9575C18.1055 20.2631 18.8561 20.4159 19.6071 20.4159C20.3589 20.4159 21.111 20.2627 21.8117 19.9564L30.2888 16.2507V17.8152ZM37.259 11.9011L21.3493 18.8558C20.2425 19.3397 18.9739 19.3401 17.8688 18.857L5.70969 13.5416L16.8507 11.5653C17.3518 12.1702 18.3731 12.5663 19.6078 12.5663C21.3699 12.5663 22.6986 11.76 22.6986 10.6907C22.6986 9.62141 21.3699 8.81505 19.6078 8.81505C18.0074 8.81505 16.7647 9.48022 16.55 10.4034L3.85737 12.6549C3.82013 12.6615 3.78452 12.6718 3.75041 12.685L1.95584 11.9004C1.46608 11.6865 1.17374 11.2343 1.17374 10.691C1.17374 10.1471 1.46647 9.69444 1.9567 9.48014L17.8663 2.52529C18.4203 2.28322 19.0146 2.16214 19.6087 2.16214C20.2018 2.16214 20.7948 2.28282 21.3469 2.5241L37.2599 9.48054C37.7496 9.6946 38.042 10.1468 38.042 10.6901C38.042 11.2341 37.7492 11.6868 37.259 11.9011ZM17.6907 10.6908C17.6907 10.5164 18.3498 10.0123 19.6078 10.0123C20.8657 10.0123 21.5249 10.5164 21.5249 10.6908C21.5249 10.8652 20.8657 11.3692 19.6078 11.3692C18.3498 11.3692 17.6907 10.8651 17.6907 10.6908Z"
                                        fill="#30373E" />
                                    <path
                                        d="M23.9888 24.2054C24.0326 24.2054 24.077 24.2004 24.1215 24.1899C24.5643 24.0855 25.0007 23.9644 25.4183 23.8296C25.7273 23.7299 25.8986 23.3936 25.8008 23.0784C25.7031 22.7632 25.3734 22.5883 25.0643 22.6881C24.6762 22.8133 24.27 22.9261 23.8573 23.0234C23.5415 23.0978 23.3446 23.4192 23.4175 23.7413C23.4803 24.0182 23.7218 24.2054 23.9888 24.2054Z"
                                        fill="#30373E" />
                                </svg>
                                <div class="info">
                                    <h6 class="title">Education</h6>
                                    <p class="disc">
                                        {{ $data[0]['profile']['education']['degree'] }}
                                    </p>
                                </div>
                            </div>
                            <!-- single contact  info end -->
                            <!-- single contact  info -->
                            <div class="single-contact-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33"
                                    fill="none">
                                    <mask id="mask0_690_798" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="33" height="33">
                                        <path d="M32.2031 0.527466H0V32.7353H32.2031V0.527466Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_690_798)">
                                        <path
                                            d="M31.574 15.1189C31.1825 15.1189 30.8665 14.8029 30.8665 14.4113C30.8665 7.49984 25.2438 1.87161 18.3286 1.87161C17.9371 1.87161 17.6211 1.55553 17.6211 1.16396C17.6211 0.772386 17.9371 0.456299 18.3286 0.456299C26.0221 0.456299 32.2816 6.7167 32.2816 14.4113C32.2816 14.8029 31.9656 15.1189 31.574 15.1189Z"
                                            fill="#30373E" />
                                        <path
                                            d="M27.7902 15.116C27.3987 15.116 27.0826 14.7999 27.0826 14.4084C27.0826 9.58215 23.1581 5.65701 18.3326 5.65701C17.941 5.65701 17.625 5.34093 17.625 4.94936C17.625 4.55779 17.941 4.2417 18.3326 4.2417C23.9411 4.2417 28.4977 8.80373 28.4977 14.4084C28.4977 14.7999 28.1817 15.116 27.7902 15.116Z"
                                            fill="#30373E" />
                                        <path
                                            d="M24.0071 15.1173C23.6156 15.1173 23.2996 14.8012 23.2996 14.4097C23.2996 11.6687 21.0731 9.44192 18.3326 9.44192C17.941 9.44192 17.625 9.12584 17.625 8.73427C17.625 8.3427 17.941 8.02661 18.3326 8.02661C21.8515 8.02661 24.7147 10.8903 24.7147 14.4097C24.7147 14.8012 24.3939 15.1173 24.0071 15.1173Z"
                                            fill="#30373E" />
                                        <path
                                            d="M20.2202 15.1194C19.8287 15.1194 19.5126 14.8033 19.5126 14.4117C19.5126 13.7607 18.9796 13.2276 18.3286 13.2276C17.9371 13.2276 17.6211 12.9115 17.6211 12.5199C17.6211 12.1283 17.9371 11.8123 18.3286 11.8123C19.7626 11.8123 20.9277 12.9775 20.9277 14.4117C20.9277 14.7986 20.6117 15.1194 20.2202 15.1194Z"
                                            fill="#30373E" />
                                        <path
                                            d="M11.786 20.9596C11.786 21.3087 11.503 21.5871 11.1586 21.5871C10.8096 21.5871 10.5312 21.304 10.5312 20.9596C10.5312 20.6105 10.8143 20.3322 11.1586 20.3322C11.503 20.3322 11.786 20.6105 11.786 20.9596Z"
                                            fill="#30373E" />
                                        <path
                                            d="M20.4992 32.8152C19.3766 32.8152 18.2492 32.5651 17.1973 32.0509C8.14536 27.6115 3.22551 20.5774 0.687748 15.4587C-0.736794 12.5856 -0.147166 9.11339 2.15002 6.81587L3.42362 5.54208C3.7774 5.18826 4.25382 4.99011 4.75382 4.99011C5.25383 4.99011 5.73025 5.18826 6.08402 5.54208L11.1124 10.5664C11.4661 10.9203 11.6643 11.3968 11.6643 11.8968C11.6643 12.4016 11.4661 12.8734 11.1124 13.2272L8.97556 15.3691C8.58405 15.7606 8.50386 16.3645 8.78216 16.808C9.1265 17.3458 9.49443 17.8742 9.88123 18.3837C10.1171 18.6951 10.0558 19.1385 9.74915 19.3744C9.43783 19.6103 8.99443 19.549 8.75858 19.2423C8.34819 18.7045 7.95668 18.1431 7.59347 17.5722C6.95667 16.5721 7.11705 15.2275 7.97555 14.3689L10.1124 12.2318C10.202 12.1422 10.2492 12.0242 10.2492 11.9016C10.2492 11.7742 10.202 11.661 10.1124 11.5713L5.08401 6.54224C4.99439 6.4526 4.87646 6.40543 4.75382 6.40543C4.63118 6.40543 4.51325 6.4526 4.42363 6.54224L3.15003 7.81602C1.28209 9.68424 0.805673 12.5007 1.95663 14.8313C4.39533 19.7518 9.1265 26.517 17.82 30.7818C20.1691 31.933 22.9993 31.4565 24.8625 29.593L26.1644 28.2909C26.254 28.2013 26.3012 28.0833 26.3012 27.9606C26.3012 27.8333 26.254 27.7153 26.1644 27.6304L21.136 22.5966C21.0464 22.507 20.9285 22.4598 20.8059 22.4598C20.6832 22.4598 20.5653 22.507 20.4757 22.5966L18.3389 24.7337C17.4804 25.5924 16.136 25.7528 15.1407 25.1159C14.3294 24.5969 13.5416 24.0261 12.7963 23.4175C12.4945 23.1722 12.4473 22.724 12.6973 22.4221C12.9426 22.1201 13.3907 22.0729 13.6926 22.323C14.3954 22.8985 15.1407 23.4364 15.9049 23.927C16.3435 24.2101 16.9473 24.1251 17.3436 23.7336L19.4804 21.5965C19.8341 21.2426 20.3106 21.0445 20.8106 21.0445C21.3106 21.0445 21.787 21.2426 22.1408 21.5965L27.1644 26.6208C27.5182 26.9746 27.7163 27.4511 27.7163 27.9559C27.7163 28.4607 27.5182 28.9325 27.1644 29.2863L25.8625 30.5884C24.4049 32.0462 22.4662 32.8152 20.4992 32.8152Z"
                                            fill="#30373E" />
                                    </g>
                                </svg>
                                <div class="info">
                                    <h6 class="title">Phone Number:</h6>
                                    <a href="tel:+4733378901" class="disc">
                                        {{ $data[0]['profile']['contact']['phone'] }}</a>
                                </div>
                            </div>
                            <!-- single contact  info end -->
                            <!-- single contact  info -->
                            <div class="single-contact-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33"
                                    fill="none">
                                    <path
                                        d="M31.5865 13.0956C31.5899 13.0634 31.5903 13.0311 31.5883 12.9987C31.5998 12.8124 31.5225 12.6237 31.363 12.4981L27.587 9.5271V8.06066C27.587 6.68226 26.4464 5.56088 25.0443 5.56088H22.5463L16.2796 0.63015C16.2794 0.629879 16.2792 0.629591 16.279 0.629304C16.157 0.479404 15.9762 0.403567 15.7949 0.40697C15.6137 0.403567 15.4328 0.479388 15.3108 0.629304C15.3106 0.629575 15.3104 0.629863 15.3102 0.63015L9.0436 5.56088H6.54552C5.14347 5.56088 4.00284 6.68226 4.00284 8.06066V9.52712L0.226849 12.4981C0.0673071 12.6236 -0.00994492 12.8124 0.00154376 12.9987C-0.000471227 13.0311 -1.21071e-09 13.0634 0.00333123 13.0956C0.00118624 13.116 0 13.1367 0 13.1577V29.5432C0 31.0954 1.3556 32.3582 3.02183 32.3582H28.568C30.2342 32.3582 31.5898 31.0954 31.5898 29.5432V13.1578C31.5899 13.1368 31.5887 13.116 31.5865 13.0956ZM27.587 11.0501L30.0637 12.9987L27.587 14.9474V11.0501ZM15.7949 1.77171L20.6107 5.56085H10.9792L15.7949 1.77171ZM5.2123 8.06063C5.2123 7.33792 5.81041 6.74991 6.54552 6.74991H25.0443C25.7794 6.74991 26.3776 7.33792 26.3776 8.06063V9.82016C26.3776 9.82072 26.3775 9.82129 26.3776 9.82184V15.899L15.7949 24.2258L5.2123 15.8991V8.06063ZM4.00284 11.0501V14.9474L1.52621 12.9987L4.00284 11.0501ZM1.20948 29.5432V14.2725L11.0521 22.0169L1.38447 30.2396C1.2724 30.0284 1.20948 29.7923 1.20948 29.5432ZM28.568 31.1691H3.02185C2.76507 31.1691 2.52077 31.1207 2.29923 31.0339L12.0124 22.7725L15.3102 25.3674C15.3105 25.3677 15.3106 25.3679 15.3108 25.3682C15.4303 25.5149 15.606 25.5912 15.7834 25.5912C15.7872 25.5912 15.7911 25.5908 15.7949 25.5908C15.7988 25.5908 15.8027 25.5912 15.8065 25.5912C15.9839 25.5912 16.1596 25.5149 16.279 25.3682C16.2793 25.368 16.2794 25.3677 16.2796 25.3674L19.5775 22.7725L29.2906 31.0339C29.0691 31.1207 28.8248 31.1691 28.568 31.1691ZM30.3804 29.5432C30.3804 29.7923 30.3174 30.0284 30.2054 30.2396L20.5378 22.017L30.3804 14.2725V29.5432ZM9.57124 12.3754H22.0825C22.4165 12.3754 22.6872 12.1092 22.6872 11.7808C22.6872 11.4525 22.4165 11.1863 22.0825 11.1863H9.57124C9.23724 11.1863 8.9665 11.4525 8.9665 11.7808C8.9665 12.1092 9.23724 12.3754 9.57124 12.3754ZM22.6872 15.3579C22.6872 15.0295 22.4165 14.7634 22.0825 14.7634H9.57124C9.23724 14.7634 8.9665 15.0295 8.9665 15.3579C8.9665 15.6863 9.23724 15.9524 9.57124 15.9524H22.0825C22.4165 15.9524 22.6872 15.6863 22.6872 15.3579Z"
                                        fill="#30373E" />
                                </svg>
                                <div class="info">
                                    <h6 class="title">Email Address:</h6>
                                    <a href="mailto:{{ $data[0]['profile']['contact']['email'] }}" class="disc">
                                        {{ $data[0]['profile']['contact']['email'] }}
                                    </a>
                                </div>
                            </div>
                            <!-- single contact  info end -->
                            <!-- single contact  info -->
                            <div class="single-contact-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="34" viewBox="0 0 28 34"
                                    fill="none">
                                    <path
                                        d="M12.8155 19.8807L12.8315 19.8969C12.9307 19.9945 13.2292 20.2884 13.668 20.2883H13.6817C14.1205 20.2883 14.419 19.9945 14.5182 19.8969L14.5342 19.8807C16.3655 17.9562 18.4292 15.6943 19.746 13.2024C21.3592 10.1495 21.506 7.32448 20.1821 4.80533L20.1795 4.80042C18.9259 2.46152 16.4376 0.982528 13.6853 0.940552H13.6748H13.6643C10.9121 0.982339 8.42374 2.46133 7.16754 4.80514C5.84368 7.32416 5.99069 10.1494 7.60372 13.2022C8.92047 15.6943 10.9844 17.9562 12.8155 19.8807ZM8.3907 5.45455C9.40524 3.56159 11.4294 2.36322 13.6748 2.32546C15.9192 2.36322 17.9425 3.56039 18.9575 5.45178C21.3536 10.0153 17.5249 14.7128 13.6748 18.7747C9.82406 14.7121 5.99446 10.0139 8.3907 5.45455Z"
                                        fill="#30373E" />
                                    <path
                                        d="M17.7026 8.42509C17.7026 7.62784 17.4662 6.84848 17.0233 6.18558C16.5804 5.52268 15.9508 5.00601 15.2142 4.7009C14.4777 4.3958 13.6672 4.31596 12.8852 4.47149C12.1033 4.62702 11.385 5.01093 10.8213 5.57467C10.2575 6.13841 9.87363 6.85667 9.71809 7.6386C9.56254 8.42054 9.64237 9.23104 9.94746 9.96761C10.2526 10.7042 10.7692 11.3337 11.4321 11.7767C12.095 12.2196 12.8744 12.456 13.6716 12.456C14.7403 12.4548 15.7649 12.0297 16.5206 11.2741C17.2763 10.5184 17.7014 9.4938 17.7026 8.42509ZM11.0254 8.42509C11.0254 7.90171 11.1806 7.39007 11.4714 6.95488C11.7621 6.51969 12.1754 6.18051 12.659 5.98021C13.1425 5.77991 13.6746 5.7275 14.1879 5.8296C14.7013 5.93171 15.1728 6.18374 15.5429 6.55383C15.913 6.92393 16.165 7.39545 16.2671 7.90878C16.3692 8.42212 16.3168 8.9542 16.1165 9.43774C15.9162 9.92129 15.577 10.3346 15.1418 10.6254C14.7066 10.9161 14.195 11.0713 13.6716 11.0713C12.9701 11.0704 12.2975 10.7914 11.8014 10.2953C11.3053 9.79922 11.0263 9.12665 11.0254 8.42509Z"
                                        fill="#30373E" />
                                    <path
                                        d="M27.172 12.1436C27.077 12.0792 26.9677 12.0391 26.8535 12.0268C26.7394 12.0146 26.6241 12.0305 26.5175 12.0732L20.8045 14.3614C20.634 14.4297 20.4976 14.5629 20.4254 14.7317C20.3531 14.9005 20.3509 15.0911 20.4192 15.2616C20.4874 15.432 20.6206 15.5684 20.7894 15.6407C20.9583 15.7129 21.1489 15.7152 21.3193 15.6469L26.0959 13.7337V28.5126L18.7812 31.4469V19.0234C18.7812 18.8398 18.7082 18.6638 18.5784 18.5339C18.4486 18.4041 18.2725 18.3312 18.0889 18.3312C17.9053 18.3312 17.7292 18.4041 17.5994 18.5339C17.4696 18.6638 17.3966 18.8398 17.3966 19.0234V31.4472L10.0819 28.515V19.8142C10.0819 19.6306 10.009 19.4545 9.87918 19.3247C9.74935 19.1949 9.57327 19.1219 9.38968 19.1219C9.20607 19.1219 9.03 19.1949 8.90017 19.3247C8.77035 19.4545 8.69741 19.6306 8.69741 19.8142V28.5132C7.37758 29.0438 3.36944 30.654 1.3878 31.45L1.38478 16.665L6.04353 14.7944C6.1279 14.7605 6.20478 14.7103 6.26976 14.6468C6.33475 14.5832 6.38658 14.5074 6.42228 14.4238C6.45798 14.3401 6.47686 14.2503 6.47785 14.1594C6.47883 14.0685 6.4619 13.9782 6.42801 13.8939C6.39413 13.8095 6.34396 13.7326 6.28036 13.6676C6.21677 13.6026 6.141 13.5508 6.05738 13.5151C5.97375 13.4794 5.88392 13.4605 5.793 13.4595C5.70208 13.4586 5.61185 13.4755 5.52748 13.5094L0.441731 15.5515C0.311058 15.6031 0.199002 15.693 0.120198 15.8094C0.0413939 15.9257 -0.000494396 16.0631 4.40342e-06 16.2036L0.00283651 32.46C0.00384232 32.6458 0.0780315 32.8237 0.209323 32.9551C0.340615 33.0866 0.51843 33.161 0.704225 33.1623C0.810752 33.1613 0.91585 33.1377 1.0126 33.0931C2.27522 32.5858 8.08224 30.2531 9.38678 29.7284L17.8183 33.1081C17.9919 33.1789 18.1863 33.1789 18.3599 33.1081L27.0406 29.6254C27.1708 29.5735 27.2824 29.4837 27.3608 29.3676C27.4392 29.2514 27.4809 29.1144 27.4805 28.9743V12.725C27.4806 12.6102 27.4525 12.4972 27.3987 12.3958C27.3449 12.2945 27.2671 12.2079 27.172 12.1436Z"
                                        fill="#30373E" />
                                </svg>
                                <div class="info">
                                    <h6 class="title">Location:</h6>
                                    <p class="disc">
                                        {{ $data[0]['profile']['contact']['location'] }}
                                    </p>
                                </div>
                            </div>
                            <!-- single contact  info end -->
                        </div>
                        <!-- team contact info area and experience end -->
                        <div class="team-details-social-area">
                            <p class="follow">Follow Me :</p>
                            <div class="social-team-one">
                                <ul>
                                    <li><a href="{{ $data[0]['profile']['socialMedia']['facebook'] }}"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $data[0]['profile']['socialMedia']['x'] }}"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ $data[0]['profile']['socialMedia']['youtube'] }}"><i
                                                class="fab fa-youtube"></i></a></li>
                                    <li><a href="{{ $data[0]['profile']['socialMedia']['instagram'] }}"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{ $data[0]['profile']['socialMedia']['linkedin'] }}"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
