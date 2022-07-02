@extends('layouts.layout', ['titlePage' => 'استاددونی', 'menu' => 'top'])

@section('content')

@include('partials.topBarTop.topBarTop')

@include('partials.topMenu')

<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-12">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: slider  -->
                <div class="col-span-12 mt-8">
                    <div id="fade-animation-slider" class="p-5">
                        <div class="preview">
                            <div class="mx-6 pb-8">
                                <div class="fade-mode">
                                    <div class="h-64 px-2">
                                        <div class="h-full image-fit rounded-md overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/preview-1.jpg" />
                                        </div>
                                    </div>
                                    <div class="h-64 px-2">
                                        <div class="h-full image-fit rounded-md overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/preview-9.jpg" />
                                        </div>
                                    </div>
                                    <div class="h-64 px-2">
                                        <div class="h-full image-fit rounded-md overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/preview-5.jpg" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <!-- END: slider  -->

                <!-- BEGIN: better teacher section  -->
                <div class="col-span-12 lg:col-span-12 mt-8">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h1 class="text-lg font-medium truncate ml-5">
                           برترین اساتید تدریس خصوصی استاد دونی
                        </h1>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div class="intro-y grid grid-cols-12 gap-6 mt-5">
                            <!-- BEGIN: Blog Layout -->
                            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                        
                                <div class="p-5">
                                    <div class="h-40 xxl:h-56 image-fit">
                                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-6.jpg">
                                    </div>
                                    <a href="" class="block font-medium text-base mt-5"> 200 کلمه لاتین ، همراه با تعداد انگشت شماری از جملات مدل </a> 
                                    <div class="text-gray-700 dark:text-gray-600 mt-2"> در این صورت می توان امید داشت که تمام و
                                            دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز
                                            شامل حروفچینی دستاوردهای  
                                    </div>
                                </div>
                               
                                <div class="px-5 pt-3 pb-5 border-t border-gray-200 dark:border-dark-5">
                                    <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                                        <div class="ml-2"> نظرات: <span class="font-medium">35</span> </div>
                                        <div class="ml-2"> مشاهده: <span class="font-medium">76k</span> </div>
                                        <div class="mr-auto"> لایک: <span class="font-medium">44k</span> </div>
                                    </div>
                                </div>
                            </div>

                            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                        
                                <div class="p-5">
                                    <div class="h-40 xxl:h-56 image-fit">
                                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-6.jpg">
                                    </div>
                                    <a href="" class="block font-medium text-base mt-5"> 200 کلمه لاتین ، همراه با تعداد انگشت شماری از جملات مدل </a> 
                                    <div class="text-gray-700 dark:text-gray-600 mt-2"> در این صورت می توان امید داشت که تمام و
                                            دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز
                                            شامل حروفچینی دستاوردهای  
                                    </div>
                                </div>
                               
                                <div class="px-5 pt-3 pb-5 border-t border-gray-200 dark:border-dark-5">
                                    <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                                        <div class="ml-2"> نظرات: <span class="font-medium">35</span> </div>
                                        <div class="ml-2"> مشاهده: <span class="font-medium">76k</span> </div>
                                        <div class="mr-auto"> لایک: <span class="font-medium">44k</span> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                        
                                <div class="p-5">
                                    <div class="h-40 xxl:h-56 image-fit">
                                        <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-6.jpg">
                                    </div>
                                    <a href="" class="block font-medium text-base mt-5"> 200 کلمه لاتین ، همراه با تعداد انگشت شماری از جملات مدل </a> 
                                    <div class="text-gray-700 dark:text-gray-600 mt-2"> در این صورت می توان امید داشت که تمام و
                                            دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز
                                            شامل حروفچینی دستاوردهای  
                                    </div>
                                </div>
                               
                                <div class="px-5 pt-3 pb-5 border-t border-gray-200 dark:border-dark-5">
                                    <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                                        <div class="ml-2"> نظرات: <span class="font-medium">35</span> </div>
                                        <div class="ml-2"> مشاهده: <span class="font-medium">76k</span> </div>
                                        <div class="mr-auto"> لایک: <span class="font-medium">44k</span> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Blog Layout -->
                            <!-- BEGIN: Pagination -->
                            <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                                <ul class="pagination">
                                    <li>
                                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                                    </li>
                                    <li>
                                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                                    </li>
                                    <li> <a class="pagination__link" href="">...</a> </li>
                                    <li> <a class="pagination__link" href="">1</a> </li>
                                    <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                                    <li> <a class="pagination__link" href="">3</a> </li>
                                    <li> <a class="pagination__link" href="">...</a> </li>
                                    <li>
                                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                                    </li>
                                    <li>
                                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                                    </li>
                                </ul>
                                <select class="w-20 form-select box mt-3 sm:mt-0">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>35</option>
                                    <option>50</option>
                                </select>
                            </div>
                            <!-- END: Pagination -->
                        </div>
                    </div>
                </div>
                <!-- END: better teacher section -->

                <!-- BEGIN: other teacher section  -->
                <div class="col-span-12 lg:col-span-12 mt-8">
                    <h2 class="intro-y text-lg font-medium mt-10">
                        معلم‌های تدریس خصوصی درس‌های مختلف
                    </h2>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                       
                        <!-- BEGIN: Users Layout -->
                        <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
                            <div class="box">
                                <div class="flex items-start px-5 pt-5">
                                    <div class="w-full flex flex-col lg:flex-row items-center">
                                        <div class="w-16 h-16 image-fit">
                                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-3.jpg">
                                        </div>
                                        <div class="lg:mr-4 text-center lg:text-right mt-3 lg:mt-0">
                                            <a href="" class="font-medium">ادوارد نوترون</a> 
                                            <div class="text-gray-600 text-xs mt-0.5">مهندس دواپس</div>
                                        </div>
                                    </div>
                                    <div class="absolute left-0 top-0 ml-5 mt-3 dropdown">
                                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i> </a>
                                        <div class="dropdown-menu w-40">
                                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 ml-2"></i> ویرایش</a>
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="trash" class="w-4 h-4 ml-2"></i> حذف </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center lg:text-right p-5">
                                    <div>لورم ایپسوم متن ساختگی با تولید سادگی
                                                نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                    <div class="flex items-center justify-center lg:justify-start text-gray-600 mt-5"> <i data-feather="mail" class="w-3 h-3 ml-2"></i> edwardnorton@left4code.com </div>
                                    <div class="flex items-center justify-center lg:justify-start text-gray-600 mt-1"> <i data-feather="instagram" class="w-3 h-3 ml-2"></i> ادوارد نورتون </div>
                                </div>
                                <div class="text-center lg:text-left p-5 border-t border-gray-200 dark:border-dark-5">
                                    <button class="btn btn-primary py-1 px-2 ml-2">پیام</button>
                                    <button class="btn btn-outline-secondary py-1 px-2">پروفایل</button>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
                            <div class="box">
                                <div class="flex items-start px-5 pt-5">
                                    <div class="w-full flex flex-col lg:flex-row items-center">
                                        <div class="w-16 h-16 image-fit">
                                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                                        </div>
                                        <div class="lg:mr-4 text-center lg:text-right mt-3 lg:mt-0">
                                            <a href="" class="font-medium">تام کروز</a> 
                                            <div class="text-gray-600 text-xs mt-0.5">مهندس دواپس</div>
                                        </div>
                                    </div>
                                    <div class="absolute left-0 top-0 ml-5 mt-3 dropdown">
                                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i> </a>
                                        <div class="dropdown-menu w-40">
                                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 ml-2"></i> ویرایش</a>
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="trash" class="w-4 h-4 ml-2"></i> حذف </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center lg:text-right p-5">
                                    <div>لورم ایپسوم متن ساختگی با تولید سادگی
                                                نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                    <div class="flex items-center justify-center lg:justify-start text-gray-600 mt-5"> <i data-feather="mail" class="w-3 h-3 ml-2"></i> tomcruise@left4code.com </div>
                                    <div class="flex items-center justify-center lg:justify-start text-gray-600 mt-1"> <i data-feather="instagram" class="w-3 h-3 ml-2"></i> تام کروز</div>
                                </div>
                                <div class="text-center lg:text-left p-5 border-t border-gray-200 dark:border-dark-5">
                                    <button class="btn btn-primary py-1 px-2 ml-2">پیام</button>
                                    <button class="btn btn-outline-secondary py-1 px-2">پروفایل</button>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
                            <div class="box">
                                <div class="flex items-start px-5 pt-5">
                                    <div class="w-full flex flex-col lg:flex-row items-center">
                                        <div class="w-16 h-16 image-fit">
                                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-11.jpg">
                                        </div>
                                        <div class="lg:mr-4 text-center lg:text-right mt-3 lg:mt-0">
                                            <a href="" class="font-medium">مورگان فریمن</a> 
                                            <div class="text-gray-600 text-xs mt-0.5">مهندس دواپس</div>
                                        </div>
                                    </div>
                                    <div class="absolute left-0 top-0 ml-5 mt-3 dropdown">
                                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i> </a>
                                        <div class="dropdown-menu w-40">
                                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 ml-2"></i> ویرایش</a>
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="trash" class="w-4 h-4 ml-2"></i> حذف </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center lg:text-right p-5">
                                    <div>لورم ایپسوم متن ساختگی با تولید سادگی
                                                نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                    <div class="flex items-center justify-center lg:justify-start text-gray-600 mt-5"> <i data-feather="mail" class="w-3 h-3 ml-2"></i> morganfreeman@left4code.com </div>
                                    <div class="flex items-center justify-center lg:justify-start text-gray-600 mt-1"> <i data-feather="instagram" class="w-3 h-3 ml-2"></i> مورگان فریمن </div>
                                </div>
                                <div class="text-center lg:text-left p-5 border-t border-gray-200 dark:border-dark-5">
                                    <button class="btn btn-primary py-1 px-2 ml-2">پیام</button>
                                    <button class="btn btn-outline-secondary py-1 px-2">پروفایل</button>
                                </div>
                            </div>
                        </div>
                    
                        <!-- END: Users Layout -->
                        <!-- BEGIN: Pagination -->
                        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                            <ul class="pagination">
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                                </li>
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                                </li>
                                <li> <a class="pagination__link" href="">...</a> </li>
                                <li> <a class="pagination__link" href="">1</a> </li>
                                <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                                <li> <a class="pagination__link" href="">3</a> </li>
                                <li> <a class="pagination__link" href="">...</a> </li>
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                                </li>
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                                </li>
                            </ul>
                            <select class="w-20 form-select box mt-3 sm:mt-0">
                                <option>10</option>
                                <option>25</option>
                                <option>35</option>
                                <option>50</option>
                            </select>
                        </div>
                        <!-- END: Pagination -->
                    </div>
                </div>
                <!-- END: other teacher section -->

            </div>
        </div>
        
    </div> 
</div>
 
<!-- END: Content -->
@endsection
