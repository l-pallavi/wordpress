<?php

namespace WPSocialReviews\App\Services\Platforms\Chats;
use WPSocialReviews\Framework\Support\Arr;

if (!defined('ABSPATH')) {
    exit;
}

class Helper
{
    public static function getSvgIcons($configs = [], $channel = [], $type = '')
    {
        $settings = $configs[$configs['template']];

        $button_color = $settings['styles']['widget_icon_bg_color'] ? esc_attr($settings['styles']['widget_icon_bg_color']) : '';

        $icons        = array(
            'icon1'     => '<svg class="wpsr-icon-whatsapp" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                    <path class="wpsr-path-1" d="M378.853,294.202c-0.997-0.479-38.324-18.859-44.956-21.246c-2.708-0.972-5.609-1.922-8.694-1.922
                            c-5.04,0-9.274,2.512-12.572,7.446c-3.729,5.542-15.016,18.736-18.503,22.678c-0.456,0.52-1.077,1.142-1.45,1.142
                            c-0.334,0-6.111-2.379-7.86-3.138c-40.041-17.393-70.433-59.219-74.601-66.272c-0.595-1.014-0.62-1.474-0.625-1.474
                            c0.146-0.537,1.493-1.887,2.188-2.583c2.033-2.011,4.236-4.663,6.367-7.228c1.009-1.215,2.02-2.432,3.012-3.579
                            c3.092-3.597,4.468-6.39,6.064-9.625l0.836-1.681c3.897-7.742,0.569-14.274-0.507-16.384c-0.883-1.765-16.643-39.803-18.319-43.799
                            c-4.03-9.643-9.354-14.133-16.753-14.133c-0.687,0,0,0-2.879,0.121c-3.506,0.148-22.598,2.661-31.039,7.983
                            c-8.952,5.644-24.096,23.633-24.096,55.271c0,28.474,18.07,55.359,25.828,65.584c0.193,0.258,0.547,0.781,1.061,1.533
                            c29.711,43.39,66.75,75.547,104.297,90.546c36.148,14.439,53.265,16.108,62.996,16.108c0.002,0,0.002,0,0.002,0
                            c4.089,0,7.362-0.321,10.25-0.605l1.832-0.175c12.487-1.107,39.929-15.327,46.171-32.673c4.917-13.663,6.214-28.591,2.942-34.008
                            C387.604,298.403,383.742,296.549,378.853,294.202z" />
                    <path class="wpsr-path-2" d="M260.545,0C121.879,0,9.066,111.965,9.066,249.588c0,44.512,11.912,88.084,34.479,126.218
                            L0.352,503.216c-0.805,2.375-0.206,5.002,1.551,6.791C3.172,511.302,4.892,512,6.649,512c0.673,0,1.351-0.101,2.013-0.313
                            l132.854-42.217c36.355,19.424,77.445,29.678,119.03,29.678C399.199,499.15,512,387.197,512,249.588
                            C512,111.965,399.199,0,260.545,0z M260.545,447.159c-39.13,0-77.029-11.299-109.608-32.677c-1.095-0.72-2.367-1.089-3.647-1.089
                            c-0.677,0-1.355,0.103-2.015,0.313l-66.552,21.155l21.484-63.383c0.695-2.051,0.347-4.314-0.933-6.063
                            c-24.809-33.898-37.923-73.949-37.923-115.827c0-108.955,89.357-197.597,199.191-197.597c109.821,0,199.168,88.642,199.168,197.597
                            C459.713,358.53,370.367,447.159,260.545,447.159z" />
                </g>
            </svg>',
            'icon2'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58.18 43.64">
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path class="wpsr-fm-bubble-btn-svg-path-1"
                                          d="M52.73,0a5.26,5.26,0,0,1,3.86,1.59,5.26,5.26,0,0,1,1.59,3.86V38.18a5.43,5.43,0,0,1-5.45,5.46H5.45a5.26,5.26,0,0,1-3.86-1.59A5.27,5.27,0,0,1,0,38.18V5.45A5.26,5.26,0,0,1,1.59,1.59,5.26,5.26,0,0,1,5.45,0Zm0,5.45H5.45v4.66q4,3.2,15.35,12.05a9.64,9.64,0,0,0,1.59,1.42,29.18,29.18,0,0,0,2.38,1.82c.53.34,1.23.74,2.11,1.19a4.9,4.9,0,0,0,2.21.68,4.94,4.94,0,0,0,2.22-.68c.87-.45,1.57-.85,2.1-1.19s1.32-.95,2.39-1.82a10.22,10.22,0,0,0,1.59-1.42q11.36-8.86,15.34-12ZM5.45,38.18H52.73V17.05q-4,3.18-11.93,9.43a14.45,14.45,0,0,0-1.65,1.36c-.95.84-1.69,1.44-2.22,1.82s-1.29.85-2.27,1.42a13.26,13.26,0,0,1-2.84,1.25,9.55,9.55,0,0,1-2.73.4,10,10,0,0,1-2.78-.4A10.47,10.47,0,0,1,23.47,31q-1.42-.9-2.22-1.47T19,27.78a17,17,0,0,0-1.64-1.3q-8-6.26-11.94-9.43Z"/>
                                </g>
                            </g>
                        </svg>',
            'icon3'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58.21 50.91">
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path class="wpsr-fm-bubble-btn-svg-path-1"
                                          d="M8.55,6.93Q17.07,0,29.12,0T49.69,6.93q8.52,6.93,8.52,16.71t-8.52,16.7q-8.52,6.93-20.57,6.93a36.17,36.17,0,0,1-10.57-1.59A26.8,26.8,0,0,1,2.76,50.91a2.48,2.48,0,0,1-2.5-1.65,2.54,2.54,0,0,1,.45-2.9c.15-.15.51-.54,1.08-1.19A23.18,23.18,0,0,0,4,42.1,24.91,24.91,0,0,0,6.05,38,20.32,20.32,0,0,1,0,23.64Q0,13.86,8.55,6.93ZM29.12,41.82a26.55,26.55,0,0,0,16.7-5.34q6.93-5.34,6.94-12.84T45.82,10.8a26.56,26.56,0,0,0-16.7-5.35,26.54,26.54,0,0,0-16.7,5.35Q5.48,16.14,5.48,23.64A15,15,0,0,0,10,34.2l2.27,2.5-1.13,3.19a39,39,0,0,1-2.28,4.66,23.33,23.33,0,0,0,6.48-3.41l2.27-1.48,2.62.79A29.18,29.18,0,0,0,29.12,41.82ZM13.84,21.08a3.56,3.56,0,0,1,5.11,0,3.64,3.64,0,0,1-2.56,6.19,3.61,3.61,0,0,1-2.55-6.19Zm12.72,0a3.62,3.62,0,1,1,5.12,5.11,3.62,3.62,0,1,1-5.12-5.11Zm12.73,0a3.61,3.61,0,1,1,5.11,5.11,3.61,3.61,0,1,1-5.11-5.11Z"/>
                                </g>
                            </g>
                        </svg>',
            'icon4'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58.26 58.26">
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path class="wpsr-fm-bubble-btn-svg-path-1"
                                          d="M50,.73A5.28,5.28,0,0,1,55.81,1,5.1,5.1,0,0,1,58.2,6.3L51.38,50.39a5.18,5.18,0,0,1-2.73,3.86,5.3,5.3,0,0,1-2.61.68,6.69,6.69,0,0,1-2.16-.34L31.15,49.37l-4.88,6.7a5.66,5.66,0,0,1-3.92,2.16,5.29,5.29,0,0,1-4.15-1.36,5.19,5.19,0,0,1-1.82-4.09V43.23L3.43,37.78A5,5,0,0,1,0,33.12,5.11,5.11,0,0,1,2.74,28ZM46,49.48l6.7-44L5.47,32.78l12.27,5.11,24-21a1.67,1.67,0,0,1,2.44.05,1.7,1.7,0,0,1,.29,2.45l-15.91,23Zm-24.21,3.3L26,47.09l-4.21-1.7Z"/>
                                </g>
                            </g>
                        </svg>',
            'icon5'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.36 56.36">
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path class="wpsr-fm-bubble-btn-svg-path-1"
                                          d="M48.12,48.12a27.13,27.13,0,0,1-19.94,8.24A27.13,27.13,0,0,1,8.24,48.12,27.15,27.15,0,0,1,0,28.18,27.17,27.17,0,0,1,8.24,8.24,27.17,27.17,0,0,1,28.18,0,27.17,27.17,0,0,1,48.12,8.24a27.13,27.13,0,0,1,8.24,19.94A27.11,27.11,0,0,1,48.12,48.12ZM8.75,16.48a21.83,21.83,0,0,0-3.3,11.7,21.86,21.86,0,0,0,3.3,11.71l6-6a14.12,14.12,0,0,1,0-11.36ZM39.89,8.75a21.89,21.89,0,0,0-11.71-3.3,21.83,21.83,0,0,0-11.7,3.3l6,6a14.12,14.12,0,0,1,11.36,0ZM16.48,47.61a21.83,21.83,0,0,0,11.7,3.3,21.89,21.89,0,0,0,11.71-3.3l-6-6a14.12,14.12,0,0,1-11.36,0Zm18.12-13a9.05,9.05,0,0,0,0-12.84,9.05,9.05,0,0,0-12.84,0,9.05,9.05,0,0,0,0,12.84,9.05,9.05,0,0,0,12.84,0Zm13,5.29a21.86,21.86,0,0,0,3.3-11.71,21.83,21.83,0,0,0-3.3-11.7l-6,6a14.12,14.12,0,0,1,0,11.36Z"/>
                                </g>
                            </g>
                        </svg>',
            'icon6'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50.91 58.18">
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path class="wpsr-fm-bubble-btn-svg-path-1"
                                          d="M45.45,7.27a5.43,5.43,0,0,1,5.46,5.46v40a5.43,5.43,0,0,1-5.46,5.45h-40a5.26,5.26,0,0,1-3.86-1.59A5.26,5.26,0,0,1,0,52.73v-40A5.28,5.28,0,0,1,1.59,8.86,5.26,5.26,0,0,1,5.45,7.27h5.46V1.36A1.2,1.2,0,0,1,12.27,0h4.55a1.2,1.2,0,0,1,1.36,1.36V7.27H32.73V1.36A1.2,1.2,0,0,1,34.09,0h4.55A1.2,1.2,0,0,1,40,1.36V7.27Zm-.68,45.46a.6.6,0,0,0,.68-.68V18.18h-40V52.05a.61.61,0,0,0,.69.68Zm-6-22.84L22.61,46a1.21,1.21,0,0,1-1.93-.11l-8.52-8.52a1.18,1.18,0,0,1,0-1.94l2.61-2.61a1.26,1.26,0,0,1,1.93,0l5,5.11,12.62-12.5a1.17,1.17,0,0,1,1.93,0l2.5,2.5A1.18,1.18,0,0,1,38.75,29.89Z"/>
                                </g>
                            </g>
                        </svg>',
            'icon7'     => '<svg class="wpsr-icon-messenger" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.05 512.05" style="enable-background:new 0 0 512.05 512.05;" xml:space="preserve">
                    <path class="wpsr-path-1" d="M256.025,0.05C117.67-2.678,3.184,107.038,0.025,245.383c0.361,70.423,31.544,137.157,85.333,182.613
                                    v73.387c0,5.891,4.776,10.667,10.667,10.667c1.999,0,3.958-0.562,5.653-1.621l59.456-37.141
                                    c30.292,11.586,62.459,17.494,94.891,17.429c138.355,2.728,252.841-106.988,256-245.333C508.866,107.038,394.38-2.678,256.025,0.05z
                                    " />
                    <path class="wpsr-path-2" style="fill:' . $button_color . '" d="M424.558,174.983c-3.174-4.254-8.993-5.527-13.653-2.987l-110.933,60.48l-69.013-59.179c-4.232-3.628-10.544-3.387-14.485,0.555l-128,128c-4.153,4.178-4.133,10.932,0.046,15.085c3.341,3.321,8.464,4.057,12.605,1.811l110.933-60.48l69.077,59.2c4.232,3.628,10.544,3.387,14.485-0.555l128-128C427.35,185.148,427.75,179.215,424.558,174.983z" />
                </svg>',
            'messenger' => '<svg width="32" height="32" version="1.1" id="Capa_1"
                     xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     viewBox="0 0 512.05 512.05" style="enable-background:new 0 0 512.05 512.05;"
                     xml:space="preserve">
                <path class="wpsr-path-1" d="M256.025,0.05C117.67-2.678,3.184,107.038,0.025,245.383c0.361,70.423,31.544,137.157,85.333,182.613
                    v73.387c0,5.891,4.776,10.667,10.667,10.667c1.999,0,3.958-0.562,5.653-1.621l59.456-37.141
                    c30.292,11.586,62.459,17.494,94.891,17.429c138.355,2.728,252.841-106.988,256-245.333C508.866,107.038,394.38-2.678,256.025,0.05z
                    "/>
                    <path class="wpsr-path-2"
                          style="fill:' . $button_color . '"
                          d="M424.558,174.983c-3.174-4.254-8.993-5.527-13.653-2.987l-110.933,60.48l-69.013-59.179
                c-4.232-3.628-10.544-3.387-14.485,0.555l-128,128c-4.153,4.178-4.133,10.932,0.046,15.085c3.341,3.321,8.464,4.057,12.605,1.811
                l110.933-60.48l69.077,59.2c4.232,3.628,10.544,3.387,14.485-0.555l128-128C427.35,185.148,427.75,179.215,424.558,174.983z"/>
            </svg>',
            'whatsapp'  => '<svg width="32" height="32" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                    <path class="wpsr-path-1" d="M378.853,294.202c-0.997-0.479-38.324-18.859-44.956-21.246c-2.708-0.972-5.609-1.922-8.694-1.922
                                        c-5.04,0-9.274,2.512-12.572,7.446c-3.729,5.542-15.016,18.736-18.503,22.678c-0.456,0.52-1.077,1.142-1.45,1.142
                                        c-0.334,0-6.111-2.379-7.86-3.138c-40.041-17.393-70.433-59.219-74.601-66.272c-0.595-1.014-0.62-1.474-0.625-1.474
                                        c0.146-0.537,1.493-1.887,2.188-2.583c2.033-2.011,4.236-4.663,6.367-7.228c1.009-1.215,2.02-2.432,3.012-3.579
                                        c3.092-3.597,4.468-6.39,6.064-9.625l0.836-1.681c3.897-7.742,0.569-14.274-0.507-16.384c-0.883-1.765-16.643-39.803-18.319-43.799
                                        c-4.03-9.643-9.354-14.133-16.753-14.133c-0.687,0,0,0-2.879,0.121c-3.506,0.148-22.598,2.661-31.039,7.983
                                        c-8.952,5.644-24.096,23.633-24.096,55.271c0,28.474,18.07,55.359,25.828,65.584c0.193,0.258,0.547,0.781,1.061,1.533
                                        c29.711,43.39,66.75,75.547,104.297,90.546c36.148,14.439,53.265,16.108,62.996,16.108c0.002,0,0.002,0,0.002,0
                                        c4.089,0,7.362-0.321,10.25-0.605l1.832-0.175c12.487-1.107,39.929-15.327,46.171-32.673c4.917-13.663,6.214-28.591,2.942-34.008
                                        C387.604,298.403,383.742,296.549,378.853,294.202z" />
                    <path class="wpsr-path-2" d="M260.545,0C121.879,0,9.066,111.965,9.066,249.588c0,44.512,11.912,88.084,34.479,126.218
                                        L0.352,503.216c-0.805,2.375-0.206,5.002,1.551,6.791C3.172,511.302,4.892,512,6.649,512c0.673,0,1.351-0.101,2.013-0.313
                                        l132.854-42.217c36.355,19.424,77.445,29.678,119.03,29.678C399.199,499.15,512,387.197,512,249.588
                                        C512,111.965,399.199,0,260.545,0z M260.545,447.159c-39.13,0-77.029-11.299-109.608-32.677c-1.095-0.72-2.367-1.089-3.647-1.089
                                        c-0.677,0-1.355,0.103-2.015,0.313l-66.552,21.155l21.484-63.383c0.695-2.051,0.347-4.314-0.933-6.063
                                        c-24.809-33.898-37.923-73.949-37.923-115.827c0-108.955,89.357-197.597,199.191-197.597c109.821,0,199.168,88.642,199.168,197.597
                                        C459.713,358.53,370.367,447.159,260.545,447.159z" />
                </g>
            </svg>',
            'telegram'  => '<svg viewBox="0 0 33 33" fill="rgb(255, 255, 255)" width="32" height="32">
                <path d="M27.1566711,3.01477064 C27.5924362,2.97926122 28.0620472,2.99321135 28.4483128,3.22233167 C28.7931173,3.42270627 28.9928078,3.82091907 29,4.2127909 C28.9860386,4.54505764 28.9610773,4.87647891 28.9314622,5.20747745 C28.7884635,6.88741129 28.4986585,8.55001316 28.2706222,10.2198015 C28.2126612,10.6691647 28.1411619,11.1164144 28.0730471,11.5645094 C27.7392425,13.7538344 27.3783613,15.938932 27.0136724,18.123607 C26.61683,20.4689197 26.2166029,22.8142325 25.8146836,25.1586998 C25.6979155,25.8283061 25.2393044,26.4133661 24.63981,26.7253417 C23.9823546,27.0791677 23.1370548,27.107068 22.4893301,26.7156189 C19.3458979,24.5871672 16.1800428,22.4904204 13.067495,20.3167365 C12.7709209,20.0707069 12.6004224,19.6864443 12.5902687,19.3034498 C12.5796919,18.9310236 12.7057676,18.5687429 12.8788045,18.2436626 C13.1246099,17.7875356 13.4774527,17.3982002 13.8717567,17.0655107 C15.3580121,15.608779 16.9293051,14.2433571 18.4578677,12.8318576 C19.4609737,11.9124172 20.4378492,10.9633857 21.3648021,9.96658545 C21.5188007,9.82581596 21.5653387,9.6110685 21.5996076,9.41407576 C21.6211843,9.29444282 21.5839539,9.13169131 21.4439167,9.10928655 C21.1934575,9.07884991 20.9607674,9.20820566 20.7390772,9.30670203 C20.1484673,9.61064577 19.5976263,9.98603109 19.0544006,10.3669119 C17.9654108,11.1202189 16.8844593,11.8857852 15.7997002,12.6450104 C13.566298,14.2036204 11.3159729,15.7470121 8.94549505,17.0925655 C8.29015502,17.4282141 7.54046972,17.5486925 6.80939963,17.5051512 C5.872293,17.4540007 4.96353226,17.1931756 4.07338673,16.9116366 C3.62916011,16.7700216 3.17774125,16.6470068 2.74789911,16.4643869 C1.99863688,16.1566386 1.21933647,15.9017317 0.527189087,15.4730822 C0.307614215,15.3238581 0.0643472572,15.1437746 0.00554011426,14.8694221 C-0.0405748395,14.567592 0.209884359,14.3279034 0.434113033,14.1693792 C0.977338727,13.8624763 1.53283354,13.5792464 2.08875142,13.2964392 C4.04419469,12.3220438 6.04532984,11.444031 8.04731114,10.5706684 C8.82872691,10.2312152 9.60464274,9.87950282 10.3919815,9.55442252 C12.9194195,8.49590356 15.4460112,7.43569368 17.9861414,6.4080341 C20.3625422,5.44336147 22.7461354,4.49602082 25.1415745,3.57953955 C25.7892992,3.31871439 26.4543699,3.07310755 27.1566711,3.01477064 Z"></path>
            </svg>',
        );
        $icon         = $type === 'platform' && $channel ? $channel['name'] : $settings['chat_bubble']['cb_button_icon'];

        $platforms = ['messenger' => 'icon7', 'whatsapp' => 'icon1', 'telegram' => 'icon4'];
        if (empty($icon) && count($configs['channels']) === 1 &&  empty($settings['chat_bubble']['cb_button_icon']) && $configs['layout_type'] === 'chat_box') {
            $icon = $platforms[$configs['channels'][0]['name']];
        }

        if(empty($icon)) {
            $icon = 'icon3';
        }

        return $icons[$icon];
    }

    public static function isUrl($s)
    {
        return preg_match('/(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/', $s);
    }

    public static function encodeCredentials($credential)
    {
        if(strpos($credential, 'mailto') !== false){
            $credential = explode('mailto:', $credential);
            $credential = 'mailto:'.antispambot($credential[1], 1);
        }

        if(strpos($credential, 'tel') !== false){
            $credential = explode('tel:', $credential);
            $credential = 'tel:'.antispambot($credential[1], 1);
        }
        return $credential;
    }

    public static function getImageUrl ($settings)
    {
        $channels = Arr::get($settings, 'channels', []);
        if(empty($channels)) return;

        $template = Arr::get($settings, 'template', '');
        $image_url = WPSOCIALREVIEWS_URL . 'assets/images/icon/chat-icon/' . Arr::get($settings, $template . '.chat_bubble.cb_button_icon') . '.svg';
        if (empty($settings[$template]['chat_bubble']['cb_button_icon'])) {
            $image_url = WPSOCIALREVIEWS_URL . 'assets/images/svg/' . Arr::get($channels, '0.name') . '.svg';
        } else if ($settings[$template]['chat_bubble']['cb_button_icon'] === 'custom') {
            $image_url = Arr::get($settings, $template . '.chat_bubble.cb_custom_icon');
        }

        return $image_url;
    }

    public static function formatedLocalTimeToUTCTime($availableTime)
    {
        $timeZone = new \DateTimeZone(wp_timezone_string());
        $formattedTime = \DateTimeImmutable::createFromFormat('h:i:s A', $availableTime, $timeZone);

        // Handle errors in creating DateTimeImmutable object
        if ($formattedTime === false) {
            error_log("Error creating DateTimeImmutable object for $availableTime");
            return null;
        }

        // Set the timezone to UTC
        $utcTime = $formattedTime->setTimezone(new \DateTimeZone('UTC'));
        // Format and return the UTC time
        return $utcTime->format('H:i:s');
    }
}