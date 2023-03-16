<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>MARIE TEAM</title>
    <meta charset="UTF-8">
</head>
<body>
@include('components/nav')
<style>
    body {
        background: white;
    }
</style>
<form method="GET" action="{{ route('Bateauxrecherche') }}">
    @csrf
    <div class="d-flex flex-row justify-content-center align-items-center m-5">
        <div class="d-flex align-items-center border border-1 me-3">
            <svg width="30" height="48" viewBox="0 0 30 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-2">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M28.1251 26.3438L25.8938 30.6094H25.5563C22.1063 30.6094 20.9251 32.0813 17.4376 32.0813C13.9501 32.0813 11.0063 29.925 7.77195 29.925C4.5282 29.925 3.01883 30.6656 3.01883 30.6656C2.26332 29.3612 1.86857 27.8793 1.87508 26.3719L28.1251 26.3438ZM15.2532 16.5L16.5376 21.6H23.4095L24.0845 22.7719H21.122C21.122 22.7719 20.8782 22.7719 20.8782 22.9687C20.8782 23.1562 20.897 23.325 20.9251 23.5312C20.9532 23.7281 21.047 23.9438 21.422 24.0375L25.2938 24.8813L25.6688 25.5188H5.98133L7.7907 21.6H10.2282L12.9845 16.5H15.2532ZM18.5626 23.0625H18.0001C17.7001 23.0625 17.4657 23.25 17.4657 23.4844V24.2812C17.4657 24.45 17.597 24.6 17.7845 24.6656C17.8537 24.6901 17.9266 24.7028 18.0001 24.7031H18.5626C18.647 24.7031 18.7126 24.6937 18.7782 24.6656C18.9657 24.6 19.097 24.45 19.097 24.2906V23.4844C19.097 23.25 18.8626 23.0625 18.5626 23.0625ZM15.2813 23.0625H14.7188C14.4188 23.0625 14.1845 23.25 14.1845 23.4844V24.2812C14.1845 24.45 14.3157 24.6 14.5032 24.6656C14.5725 24.6901 14.6454 24.7028 14.7188 24.7031H15.2813C15.3657 24.7031 15.4313 24.6937 15.497 24.6656C15.6845 24.6 15.8157 24.45 15.8157 24.2906V23.4844C15.8157 23.25 15.5813 23.0625 15.2813 23.0625ZM12.0095 23.0625H11.4282C11.1376 23.0625 10.9032 23.25 10.9032 23.4844V24.2812C10.9032 24.45 11.0251 24.6 11.2126 24.6656C11.2782 24.6937 11.3438 24.7031 11.4282 24.7031H12.0095C12.0938 24.7031 12.1595 24.6937 12.2251 24.6656C12.4126 24.6 12.5438 24.45 12.5438 24.2906V23.4844C12.5438 23.325 12.4313 23.2031 12.2626 23.1281C12.1839 23.0882 12.0976 23.0658 12.0095 23.0625Z"
                      fill="#6BB2E2" />
            </svg>
            <select name="selectDepart"  class="form-select border-0" aria-label="Default select example">
                <option selected>choisissez un départ</option>
                @foreach($ports as $port)
                    <option name="{{$port->nom}}">{{ $port->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="d-flex align-items-center border border-1 me-3">
            <svg width="30" height="48" viewBox="0 0 30 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-2">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M28.1251 26.3438L25.8938 30.6094H25.5563C22.1063 30.6094 20.9251 32.0813 17.4376 32.0813C13.9501 32.0813 11.0063 29.925 7.77195 29.925C4.5282 29.925 3.01883 30.6656 3.01883 30.6656C2.26332 29.3612 1.86857 27.8793 1.87508 26.3719L28.1251 26.3438ZM15.2532 16.5L16.5376 21.6H23.4095L24.0845 22.7719H21.122C21.122 22.7719 20.8782 22.7719 20.8782 22.9687C20.8782 23.1562 20.897 23.325 20.9251 23.5312C20.9532 23.7281 21.047 23.9438 21.422 24.0375L25.2938 24.8813L25.6688 25.5188H5.98133L7.7907 21.6H10.2282L12.9845 16.5H15.2532ZM18.5626 23.0625H18.0001C17.7001 23.0625 17.4657 23.25 17.4657 23.4844V24.2812C17.4657 24.45 17.597 24.6 17.7845 24.6656C17.8537 24.6901 17.9266 24.7028 18.0001 24.7031H18.5626C18.647 24.7031 18.7126 24.6937 18.7782 24.6656C18.9657 24.6 19.097 24.45 19.097 24.2906V23.4844C19.097 23.25 18.8626 23.0625 18.5626 23.0625ZM15.2813 23.0625H14.7188C14.4188 23.0625 14.1845 23.25 14.1845 23.4844V24.2812C14.1845 24.45 14.3157 24.6 14.5032 24.6656C14.5725 24.6901 14.6454 24.7028 14.7188 24.7031H15.2813C15.3657 24.7031 15.4313 24.6937 15.497 24.6656C15.6845 24.6 15.8157 24.45 15.8157 24.2906V23.4844C15.8157 23.25 15.5813 23.0625 15.2813 23.0625ZM12.0095 23.0625H11.4282C11.1376 23.0625 10.9032 23.25 10.9032 23.4844V24.2812C10.9032 24.45 11.0251 24.6 11.2126 24.6656C11.2782 24.6937 11.3438 24.7031 11.4282 24.7031H12.0095C12.0938 24.7031 12.1595 24.6937 12.2251 24.6656C12.4126 24.6 12.5438 24.45 12.5438 24.2906V23.4844C12.5438 23.325 12.4313 23.2031 12.2626 23.1281C12.1839 23.0882 12.0976 23.0658 12.0095 23.0625Z"
                      fill="#6BB2E2" />
            </svg>
            <select name="selectArrivee" class="form-select border-0" aria-label="Default select example">
                <option selected>choisissez une arrivée</option>
                @foreach($ports as $port)
                    <option name="{{$port->nom}}">{{ $port->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="d-flex align-items-center border border-1 me-3">
            <svg width="30" height="48" viewBox="0 0 30 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-2">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M21.9375 25.0687C22.2572 25.0498 22.5773 25.0966 22.8782 25.2062C23.1791 25.3159 23.4544 25.486 23.687 25.7061C23.9196 25.9262 24.1046 26.1917 24.2306 26.4861C24.3566 26.7805 24.421 27.0976 24.4197 27.4178C24.4184 27.738 24.3515 28.0546 24.2231 28.348C24.0948 28.6414 23.9076 28.9053 23.6733 29.1236C23.4389 29.3418 23.1623 29.5097 22.8606 29.6169C22.5588 29.7241 22.2383 29.7684 21.9187 29.7469C21.324 29.708 20.7665 29.4441 20.3595 29.0088C19.9525 28.5734 19.7266 27.9994 19.7278 27.4034C19.729 26.8074 19.9571 26.2343 20.3659 25.8006C20.7746 25.3669 21.3333 25.1052 21.9281 25.0687H21.9375ZM9.28124 25.0687C9.6009 25.0492 9.92118 25.0953 10.2223 25.2043C10.5235 25.3133 10.7991 25.4828 11.0321 25.7025C11.2652 25.9221 11.4508 26.1872 11.5774 26.4814C11.704 26.7756 11.769 27.0925 11.7684 27.4128C11.7677 27.7331 11.7015 28.0498 11.5737 28.3434C11.4459 28.6371 11.2592 28.9014 11.0253 29.1202C10.7913 29.3389 10.5151 29.5073 10.2135 29.6151C9.91191 29.7229 9.59144 29.7677 9.27186 29.7469C8.6771 29.7092 8.11903 29.4464 7.71116 29.0119C7.3033 28.5773 7.07627 28.0038 7.07627 27.4078C7.07627 26.8119 7.3033 26.2383 7.71116 25.8038C8.11903 25.3692 8.6771 25.1064 9.27186 25.0687H9.28124ZM21.9375 26.175C21.7768 26.175 21.6177 26.2066 21.4693 26.2681C21.3209 26.3296 21.186 26.4197 21.0724 26.5333C20.9588 26.6469 20.8687 26.7818 20.8072 26.9302C20.7457 27.0787 20.7141 27.2378 20.7141 27.3984C20.7141 27.5591 20.7457 27.7182 20.8072 27.8666C20.8687 28.0151 20.9588 28.1499 21.0724 28.2635C21.186 28.3771 21.3209 28.4673 21.4693 28.5287C21.6177 28.5902 21.7768 28.6219 21.9375 28.6219C22.262 28.6219 22.5732 28.493 22.8026 28.2635C23.032 28.0341 23.1609 27.7229 23.1609 27.3984C23.1609 27.074 23.032 26.7628 22.8026 26.5333C22.5732 26.3039 22.262 26.175 21.9375 26.175ZM9.28124 26.175C9.12057 26.175 8.96148 26.2066 8.81305 26.2681C8.66462 26.3296 8.52974 26.4197 8.41614 26.5333C8.30253 26.6469 8.21241 26.7818 8.15093 26.9302C8.08945 27.0787 8.0578 27.2378 8.0578 27.3984C8.0578 27.5591 8.08945 27.7182 8.15093 27.8666C8.21241 28.0151 8.30253 28.1499 8.41614 28.2635C8.52974 28.3771 8.66462 28.4673 8.81305 28.5287C8.96148 28.5902 9.12057 28.6219 9.28124 28.6219C9.60571 28.6219 9.9169 28.493 10.1463 28.2635C10.3758 28.0341 10.5047 27.7229 10.5047 27.3984C10.5047 27.074 10.3758 26.7628 10.1463 26.5333C9.9169 26.3039 9.60571 26.175 9.28124 26.175ZM13.2937 17.4375C18.675 17.4375 20.2312 19.4062 22.6312 22.0312C27.1219 21.9937 28.0969 25.6313 28.125 27.7031L25.125 27.7406V27.4031C25.1586 26.9652 25.1015 26.5251 24.957 26.1104C24.8125 25.6957 24.5839 25.3152 24.2855 24.993C23.9871 24.6708 23.6254 24.4137 23.2229 24.2379C22.8205 24.0621 22.386 23.9713 21.9469 23.9713C21.5077 23.9713 21.0733 24.0621 20.6708 24.2379C20.2684 24.4137 19.9066 24.6708 19.6082 24.993C19.3098 25.3152 19.0812 25.6957 18.9367 26.1104C18.7923 26.5251 18.7351 26.9652 18.7687 27.4031V27.75H12.4594V27.4031C12.4701 26.9639 12.3899 26.5271 12.2238 26.1203C12.0577 25.7135 11.8093 25.3455 11.4941 25.0393C11.179 24.7331 10.804 24.4953 10.3926 24.341C9.98119 24.1866 9.54233 24.119 9.10356 24.1423C8.66478 24.1656 8.23557 24.2794 7.84286 24.4765C7.45016 24.6737 7.10246 24.9498 6.82158 25.2877C6.54071 25.6256 6.33273 26.018 6.2107 26.4401C6.08867 26.8622 6.05524 27.305 6.11249 27.7406H3.53436C0.431239 27.7406 2.40936 22.8094 3.62811 21.6937C6.65624 19.125 9.68436 17.4375 13.2844 17.4375H13.2937ZM14.0437 18.5063L12.7875 18.5344C12.7875 18.8438 12.6937 22.0312 13.0031 22.0312V22.0125C13.0031 22.0125 19.7062 22.0125 21.7969 22.0312C19.7625 19.7625 17.6531 18.5063 14.0531 18.5063H14.0437ZM11.8312 18.6188C8.41874 18.9563 6.63749 22.0312 7.70624 22.0312H11.9437V18.6563C11.9437 18.6188 11.9062 18.6188 11.8312 18.6188Z"
                      fill="#6BB2E2" />
            </svg>
            <select name="mode_transport" class="form-select border-0" aria-label="Default select example">
                <option selected>choisissez un mode de transport</option>
                <option value="Voiture">Voiture</option>
                <option value="Camping-Car">Camping-Car</option>
                <option value="A pied">A pied</option>
            </select>
        </div>
        <div class="d-flex align-items-center border border-1 me-3">
            <svg width="30" height="48" viewBox="0 0 30 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M14.2847 36.9506L13.8853 36.9497H13.5347C13.3275 36.9497 13.1203 36.8456 13.1203 36.6375L11.8734 27.7031H11.7694L10.8337 27.2878C10.6704 27.2222 10.5321 27.1064 10.4387 26.9571C10.3454 26.8078 10.3019 26.6328 10.3144 26.4572L10.5225 19.9134C10.5749 19.206 10.8934 18.5447 11.4138 18.0626C11.9343 17.5806 12.6181 17.3137 13.3275 17.3156H16.0275C16.7367 17.3137 17.4204 17.5805 17.9408 18.0623C18.4613 18.5441 18.7799 19.2052 18.8325 19.9125L19.2487 26.4572C19.2475 26.6303 19.1982 26.7996 19.1063 26.9463C19.0144 27.0929 18.8836 27.2112 18.7284 27.2878L17.7947 27.7031H17.6906L16.4437 36.6375C16.3397 36.8456 16.2365 36.9497 16.0284 36.9497H15.3169C15.254 36.9497 15.1837 36.9375 15.1528 36.9131C15.1109 36.8766 15.0768 36.8319 15.0525 36.7819L14.79 36.3187L14.5275 36.7809C14.5027 36.8312 14.4683 36.8761 14.4262 36.9131C14.3847 36.9407 14.3353 36.9539 14.2856 36.9506H14.2847ZM14.5734 10.875C14.928 10.875 15.2791 10.9448 15.6067 11.0805C15.9342 11.2162 16.2319 11.4151 16.4826 11.6658C16.7333 11.9165 16.9322 12.2142 17.0679 12.5418C17.2036 12.8693 17.2734 13.2204 17.2734 13.575C17.2734 13.9296 17.2036 14.2807 17.0679 14.6082C16.9322 14.9358 16.7333 15.2335 16.4826 15.4842C16.2319 15.7349 15.9342 15.9338 15.6067 16.0695C15.2791 16.2052 14.928 16.275 14.5734 16.275C13.8573 16.275 13.1706 15.9905 12.6642 15.4842C12.1579 14.9778 11.8734 14.2911 11.8734 13.575C11.8734 12.8589 12.1579 12.1722 12.6642 11.6658C13.1706 11.1595 13.8573 10.875 14.5734 10.875Z"
                      fill="#6BB2E2" />
            </svg>
            <select name="nbPersonnes" class="form-select border-0" aria-label="Default select example">
                <option selected>Combien etes-vous ?</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Voir les prix">
        </div>
    </div>
</form>


<div
    style="height: 65vh;background-size: cover; background-image: url('https://www.compagnie-oceane.fr/wp-content/uploads/2022/07/COUV-HOME-D-1920x866.jpg');">
    <div class="d-flex justify-content-center">
        <div class="bg-primary d-flex rounded-3 shadow w-50" style="margin-top: 10vh;">
            <div class="flex-grow-0 w-50 mx-3 mt-3">
                <p>A la une</p>
                <p class="">PORT DU MASQUE RECOMMANDE</p>
                <p class="text-wrap">
                    Face à la recrudescence de
                    l’épidémie, nous recommandons
                    à tous nos voyageurs de porter un
                    masque en gare et à bord de nos
                    navires. Nous invitons à...</p>
                <button type="button" class="btn btn-dark">Lire la suite</button>

            </div>
            <div class="bg-white rounded-3 flex-grow-1 ">
                <h1 class="text-center mt-3">Les lignes maritimes du réseau :</h1>
                <p class="text-center" style="width: 80%; margin-left: 73px;">Les traversées vers les îles du
                    Morbihan
                    en bateau toute l’année depuis les embarcadères de Quiberon et Lorient.</p>
                <div class="d-flex flex-row justify-content-evenly flex-wrap">
                    @foreach($ports as $port)
                        <div>
                            <svg width="97" height="96" viewBox="0 0 97 96" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect x="0.952393" width="96" height="96" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_20_832" transform="scale(0.0025)" />
                                    </pattern>
                                    <image id="image0_20_832" width="400" height="400"
                                           xlink:href="data:image/png;base64,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RtfjgsuqPoytW3Kbg2l17j/dCBDYgbKqXxRF8WfiV7qKlctFX8MwmU3mdz73n3YECOxIWdUhBF63+GqrYalVaAyyxDTOxxzH15z7d/3SLBcnI7iO2REgsCOxCrnc8MP65s48xk6HWmKQHMXXHNuvGL4aiACBHSqrOgwbvYub2FaB0WkeY0gx5A7jaw4T7oavBiRAgI1iZXI28SAxfDUg+0CAjcLcS+xK+2HCT0hvqwEJEOBB8fz3n1qeHT8mn8x9DEuAAI+KXWoP4pLiqXgW970wEHMgQGtxXuSkpw2RuxSqpxe67vZLgACdxY2IJxPaP/KxWS6ORnAds2IIC+isWS5O46mLUxnScsrgAAQIkCTuX3k1gW6/H0ymD8MQFrC1sqrDSq3/jvBJmvsYkAoE2FrcrPdDXO77Y3x9F88kCb//S6xUdr0U+ER4DEcFAuxMPJfk94SvdxP7iHV1KECG40ApYJdSJrNDeLwaU88wvjKEBexErD669tUSHiMmQIBd6Vp9CI+REyDA4BKqD+ExAQIE2IUu1YfwmAgBAgyqY/UhPCZEgABDa1t9CI+JESDAYOIRuW2OlBUeEyRAgMHEHlQhRH5+oPGi8JgoO9GBnSmrOlQjR/H1VHhMmwAB9iKeKXIpPKZLgACQxBwIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAEkECABJBAgASQQIAN0VRfE/epos/gWkdLgAAAAASUVORK5CYII=" />
                                </defs>
                            </svg>

                            <p class="text-center">{{ $port->nom }}</p>
                        </div>
                    @endforeach

                </div>
                <div class="d-flex justify-content-center mb-4">
                    <div class="">
                        <button type="button" class="btn btn-outline-dark rounded-0"
                                style="width: 160px;">Tarifs</button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-dark rounded-0" style="width: 160px;">Horaires</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="carouselExampleIndicators" class="carousel carousel-dark slide " data-bs-ride="true">
    <div class="carousel-indicators">
        @php
            $count = 0;
        @endphp
        @foreach($weatherData as $cityName => $data)
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $count}}" class="active"
                aria-current="true" aria-label="Slide {{ $count}}"></button>
            @php
                $count++;
            @endphp
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($weatherData as $cityName => $data)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}"
                 style="height: 45vh;background-size: cover;background-image: url(https://www.corsicalinea.com/var/site/storage/images/_aliases/slideshow_destination/9/1/4/1/1419-52-fre-FR/Marseille2.jpg);">
                <div class="d-flex justify-content-center">
                    <div class="bg-light opacity-50 w-50 mt-5">
                        <h1 class="text-center">{{ $cityName }}</h1>
                        <p class="text-center">Véritable porte ouverte sur la Méditerranée, la cité phocéenne revêt des visages bien
                            différents
                            ! Ville on ne peut plus cosmopolite, elle se meut au gré des envies du voyageur : sportive,
                            artistique ou culturelle… Marseille regorge de richesses...</p>
                        <div class="carousel-caption text-dark d-flex flex-row justify-content-evenly"
                             style="position: inherit !important;">
                            <div>
                                <svg class="w-25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M0 336c0 79.5 64.5 144 144 144H512c70.7 0 128-57.3 128-128c0-61.9-44-113.6-102.4-125.4c4.1-10.7 6.4-22.4 6.4-34.6c0-53-43-96-96-96c-19.7 0-38.1 6-53.3 16.2C367 64.2 315.3 32 256 32C167.6 32 96 103.6 96 192c0 2.7 .1 5.4 .2 8.1C40.2 219.8 0 273.2 0 336z" />
                                </svg>
                                <h5>Mercredi</h5>
                                <p>{{ $data['temperatureCelsius'] }}°C°</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</body>

</html>
