<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TANCET Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    @keyframes gradient {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    .gradient-bg {
      background: #86e3ce;
      background-size: 800% 800%;
      animation: gradient 15s ease infinite;
    }

    .gradient-bg:hover {
      background: linear-gradient(270deg, #ff7e5f, #feb47b, #86e3ce, #9bafd9);
      background-size: 800% 800%;
      animation: gradient 15s ease infinite;
    }
  </style>
  <style>
    a {
      text-decoration: none;
    }
  </style>

</head>
<?php
include("navbar.php");
?>

<body class="bg-gray-100">


  <!-- Header Section -->
  <header class="gradient-bg text-white py-6">
    <div class="container mx-auto text-center">
      <h1 class="text-4xl font-bold">What is TANCET?</h1>
      <p class="mt-4 text-lg">Tamil Nadu Common Entrance Test (TANCET) is an entrance exam for postgraduate programs.</p>
    </div>
  </header>

  <!-- About TANCET Section -->
  <section class="py-12 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-semibold text-center text-gray-800">About TANCET</h2>
      <p class="mt-4 text-gray-600 text-center">
        TANCET is conducted by Anna University for admission to MBA, MCA, M.E., M.Tech., M.Arch., and M.Plan programs in colleges across Tamil Nadu.
      </p>
    </div>
  </section>

  <!-- Buttons Section -->
  <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-semibold text-gray-800">Explore TANCET</h2>
      <div class="mt-8 flex flex-col md:flex-row justify-center gap-8">
        <a href="findCollege.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg" style="text-decoration: none;">
          Find the Suitable College for My Rank
        </a>
        <a href="check_previous_data.php" class="bg-green-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg" style="text-decoration: none;">
          College Previous Years Rank Details
        </a>
        <a href="checkMyCollege.php" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg" style="text-decoration: none;">
          Check My Eligibility for Particular College
        </a>
      </div>
    </div>
  </section>

  <!-- Uses of TANCET Section -->
  <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-semibold text-center text-gray-800">Uses of TANCET</h2>
      <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-bold text-teal-500">Postgraduate Admissions</h3>
          <p class="mt-4 text-gray-600 text-justify">
            TANCET scores are used for admission to postgraduate programs in various colleges across Tamil Nadu. The exam assesses candidates' knowledge and skills in subjects pertinent to their chosen field, with programs including Master of Computer Applications (MCA), Master of Business Administration (MBA), and Master of Engineering (ME). These scores are critical for securing a place in universities, government, and self-financing engineering colleges, making TANCET a vital step for students aspiring to advanced education in Tamil Nadu.
          </p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-bold text-teal-500">Scholarship Eligibility</h3>
          <p class="mt-4 text-gray-600 text-justify">
            High TANCET scores can help students qualify for scholarships and financial aid. Many institutions offer merit-based scholarships to students who perform exceptionally well in the TANCET exam, easing the financial burden of pursuing postgraduate education. These scholarships not only recognize academic excellence but also provide opportunities for students to access quality education and enhance their career prospects.
          </p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-bold text-teal-500">Career Advancement</h3>
          <p class="mt-4 text-gray-600 text-justify">
            Graduating from a prestigious institution through TANCET can significantly enhance career opportunities and professional growth. A degree from a well-regarded college often opens doors to high-profile job positions and competitive salary packages. Additionally, it provides access to a valuable network of alumni and industry connections, which can be instrumental in advancing one’s career. The reputation of the institution can also boost credibility and recognition in the professional world, paving the way for long-term career success and development.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Famous Colleges Section -->
  <section class="py-12 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-semibold text-center text-gray-800">Famous Colleges Appearing for TANCET</h2>
      <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="https://images.collegedunia.com/public/college_data/images/appImage/25863_cover.jpg?h=260&w=360&mode=crop" alt="Anna University" class="w-full h-48 object-cover rounded-t-lg">
          <div class="p-4">
            <h3 class="text-xl font-bold text-blue-500">Anna University</h3>
            <p class="mt-4 text-gray-600">
              A premier institution known for its excellence in engineering and technology education.
            </p>
          </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="https://www.psgtech.edu/Glances/images/Pics/Footer/DSC_0040.JPG" alt="PSG College of Technology" class="w-full h-48 object-cover rounded-t-lg">
          <div class="p-4">
            <h3 class="text-xl font-bold text-blue-500">PSG College of Technology</h3>
            <p class="mt-4 text-gray-600">
              Renowned for its engineering programs and industry connections.
            </p>
          </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFBcVFRUYGBcZGiIdGhkZGhohIx0aIRodGh4hHR0iISwjHR0pHhogJDckKS4vMzMzHCI4PjgyPSwyMy8BCwsLDw4PHhISHTIpIykyMjIyMjI0MjIyMjIyMjI0MjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMv/AABEIAJEBXAMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAFAAIDBAYHAf/EAEgQAAIBAgQDBQQHBgELBAMAAAECEQADBBIhMQVBUQYTImFxMoGRoQcUI0KxwdEzUmJy4fAkFSVDc4KSk6Kys/FTY8LSFjSj/8QAGQEAAwEBAQAAAAAAAAAAAAAAAAECAwQF/8QAKBEAAgICAgICAQQDAQAAAAAAAAECERIhAzFBURMiYTJCkbEEgeEU/9oADAMBAAIRAxEAPwDpuWllqXL/AEr3LQBDlqK4Kt5Khu2TTQmUWakrU97VQFCK2UUzFyaJitQOOVIMRTb14KpY6ACmosWdmY7S8Mzai4FVYYjNrodd/L8axf1qyZVTcuwzaAEZgYiTOhEHyov2q4h3uYKSUEgkEgHQEiKziAqw1BViCvuAG3y91cXLNZOjRIaMMwGhYTI+eXltvFELWAc2yCpcCYgNoJ1AEaHy8jVXEuwBRRqF8RPLXSBzgakdBV/B8RZQUzsWAnTqRBYnY6dTXNTY3Gh2Dw1lvEDDBIybANGs+emvWZqN3FslCiwCAWzSOcREQZPwNRcR4pcc6mJESI3A5eZ/Kg2IJUeKemYbCNgenP4UOLu0It42VAAO5gDp0HqfKtL2MxzsjXMQ7C3aOghgF0MliAc2x32rGK4YiTsfjUrY641lbKMFUEkxI8U7z1I0IH/m+P6u2JI6HxT6Q7Ym3YUu+oUj2T4ZBnkAd6u8P4liboDFMofd11AHKJ25bgb++uZ9nLNlbgN6WXQEAHXnptEbe+usWO1+FRVCrdZjoAts7dWO3wmuiM0/JQawFhxqzluk/ptV7LUHDsaLokIV9Yq+EqyyoyU4LVgpUbrFPsXQzLXmSvS9N72nixZI9yV5kpd5UWIxSpGYxO3wmjFhkiDiGMFpZgljsP16CuQdoOMXMTdm40KDCrpoPONzNdD7UYlHsF1lpHlzMDl5TP6iuPYq2c7QQMusHnB/H9Kx5LtJEtt9Ghx/FEwtlLFm4C5bM9xYzLyYAnQeHY+ZFE+Lv3WHTDjwqkguBAyyWGSTmCkljHprpWKwyspW5HxHvMD86P8AaLiHem2BAQGQojkAIZuZE86XyJp2PIquWW6CN2Uac5Ayke/yqlduZXa2yiY+B8vT8qvYkZwDGknfqVGxj3715j8OEay7SC9gM87ktIk+XQdBJ3rKM01ZeiHFgFchEk+y3PN6c9B863v0e8ZDqbLt4l28xEfKsVesrcjLcUEA6eZgQPcD7qfwS69q8GUDNmgTyOg0j+4quPkE2vB26KWWhOFsYxvGb1o6+yoGXQ6jbQ+evuo4EroQJkOWvMtWMtLLQMr5aWWp8lLLQBBlpZanyUslAEOWmxU+WvIoAB9ibbOnfPPiEIvJF5ZQdp1JPurVBa512e7TtYZrV20dFBGSWMQBEHUkbdJ9K23B+NW74ldD0/LrPqBURkmJBAJTstSBa9AqxldrINRvhBVyKUU02hOKYMbA+VZrtZbcr3VsEkqztl5KoO55SdPjW4io2sgzpBOhI36b1Wbaoj41dnA+I2XthLYaBGc6coBzb7RzoXwuyXuNcYmFGnkBrMc55DmdPOtv2o4FkxBAUW7ShUnXLJBbKWO5OgzHmeQ2yWMcWLj255x4Rz00A6z+Fcsl3Roux3EEKWwAdW8U+jEiPMCKC3bbSp5SDP8AfSi2N7y4ktoiQcxHlEL1M/nQzENqF57luQ0k6DXb8KUI0thJ30RX0c+L36dfSlh8UxOVmAnlG+p39auWMNcdcysAo5wSZ9BUlvguc5lYGNSwQ5Z6MddDrMAxExQ5RWmyShdKq4EkGdB08iPWrGFtQJOsmANdfQ86JX+ChWl7gPOANdpmZ1EEeukVNw3D21uZjnuARCkAaa6RMfj6VDlHyFES8MMlnuWkI1y5hMROmvPnJBrRcF4Kb1tst4SWBAB3PKf4fukHb8R154YMiLbgjwwAMvQsN/f8qsPxC0txblq1ctODr7OUmNxyII8uVaRlGtiOk9mOFXbSRcaV5Kdxrp8q0GSsh2e7Xi4uW6VDDSQD4htJiQprR4biS3CQmsDX3zH4VtFxl0ytpWXMmk0y4mk+nzqLu3gjMRO+3Oo1w/Qmev8ATlWijRDkMvWTVV0NE4aZJmOsflQrj+NhCiqc5gaee2vTrV54rZOGXQKx/HLVqc7ajkBNZbHcXtXj4bTlmJHi5jWY1311FFeB9nu8HeXgBlc6HblI1GuooxcGEtTca4gyE+IkaSQST5nQVOTn6SDHE5vclJUE5d3tOW9pT92eegPTXTWs/jnGY6a/M+dbLtVxzD3gqWg2jftCAJ816nWdYNZnGW0jwnw5iNRtz1A391cnIlenY0QcNcjbbz67CBRDvkzMGVSIIEge0dd6GIhtmWMEwwJI9kiV16mh9++WuEyYnb3VKj2VQbxGLVLJtgDPmBz7jLlIK+swdKprg3uDPcYnxBYB6LAHlA0im4W7BliCARp1EgfH+te4jiKhiQIBIOn7w2jpy+FTGNCLFywttQ678iDznafOPlTsQ8K8wGjWP06+YqiMQW32mRpsd5Omp8qlTCO4ZxrqCQdCZ3yrz841Hzp4seja9ie2BtyuIY5TAQxoI5CI3866ZgOIW7olGB6gEH8K4fwrEIrWu9SQDBK6Fo5HkdI+HrXWOE8JtObd+y2Uga6DUHXKY0/81vBt6C6NFSy02a9BrXEMz3LXhWnAV7RQ7GZadlp4p0Umh2Q5aZkq1lrzLSGcPx9hrhW9ZUi3pJUEwQIOYSZ0EmNBBrbdksP3sXVYC7ZJXMvs3FlfvRqukCRoZ3oN2FZYu4e8GXN41XKToywYI1BJB0NP7N3zg8U9oguCdYUiJMyAfhWS8MR1guNfKmpdlo5cqBtxBP3Lv+5On+/TL+PVohLwjoqif+et6JyD2JvZVJAzNyUEAnyBOlS5h1HxrPWcdA8Nq4QpmWa2CdJ01NQXMSrnN3NzXkblofmaVDUtmlN5f3hTPrScmBPQa0FfHMVI7nQiP2qyeWmlYjjHFcUbjLZtZCCNQSYBj2tABJI6HalLQ0zouPuWXHd3PvqVgjkd45T+lcj4/wAA7q47WUZraa53P3sssddBA0A6/KrxrE49tbrXPC4Gg1DAyuo8Ub1Nh+0uKW3ctXoZSAAe7BO8mNOhOvU1lJ2FqgHjg1yNcqggxvG8ae/50xsMlvKGMu+gSNdREnUwNPWrwvAd5dfVgYtrAEGdyBoDHwoIj+HvH3Y+/QnT0gj4VCbYgwyGAFOUAfAc/d/SrZxSpbFtNNZn3TH8x310O3OaFNxEECBpAzTJOp/GAT8KE3cbBMGeUT7iPQHUdKn403sQYTFl37tTl16kAHqNZjWYO0x50WXB/ZswJIjymCZBjz1393Wslg5JzDcfp/SjOA4k5ZkzakECR5ZmM+cASdaUlbooWKAFt9eUayN9P7jShuFx7roSdWBMeUmPn86kuF3B5DNoOsb+4E/GrFzg150W5bTMFBzEaBVAJI8zt8q0SFQatBb6G4igXFGq5jBEAeEGRm38OoMTprWm7Ldo3MIrcoYlUkRyKkAiNawGFvPaOsi4Wyx0PsQB10jy+NTLauJcz924YGSArEjSZ0HT8DURWMrQ78Hbme+AD3oAImTaURPqwpFsQNTdAHU20/HNWA+k/FZFwaOGINtmyjbMCgkqYE6+6oOM4q5/kjCh7d6O8cOpVpVEzZc4OyjSJ8q6XPbVCxZ0hTiN+9H/AA119PFQzieKuorOSjkaE92kzyHtHXnFAuxeMLcJxBTP4DcVACcw+zUgLG2p0A60A7EWbrXLts271pTZZmLoyzBB0JEZjtrynpScrrXYK1eylxntHfaUL5Ad0XSNdgJJBOhmRWZxOINwhnYmNJ58yBr/AHrRDhWGF64oUZptu0HqFJ1133M1YxvCRbS1naM4LkD2v3QsdSPzms29WDACW22MxuY2HP41MbTpJJhTsCYkgSCPd8aOWcKgDOwIRYBiBLMYCgxI82mdutB8TcN1jcfRmRRB2VpgwOQ1Ux61Ctg0MRQVZRDTpA3GvLqP1qK5wxgC8SoO42Jgaf0p9xsh1A3Og5GjnCnl2AkrAUkHc89eg2jnzmm7QIz1rCu0AggbTlPWeVLugpIK7GCZk7VoCgt3GQiV3TNJjr4th8OdD+KlUYZtQwP9nrG8+lJSydBRLhrbXFzWiGC+0o9oN1EwGH4TVnhvGjaYo9uUaM6MJM8m11DDkRFDOF4oIysh9R15x76tXMYWvKWIWBvprAggHzq0iaL3HCl4oLSqrmCY0JOykD949POtV2THc31t3nuqwQMwUHLrqA4B033G/OhuE4Ml4qbVxc48RgLudQCNJ1099bPhGFZbbOXtMZhnKowlfDDNm3G2vWqgneiteTRtdUCToOtOt3kOzA+lDne8RB7og/wN7tnpqPdUiEtCTvlufhNdG/RGqCli94R3hUNzA230ifKl3nnpQy+10kTbtuAND9ovP0NPTEXQI7u2ABHtXNv92gL0E1cV7mHUUNXEXR/o7fva5/8AWvHxV0fct/F/0ooLCi3JGmpqpiceqNla8qGPZkafOqIuswVbjhAfCEQxJyloLe02ik/dGhrOcS7UWLBQLZLK9tXBzKmjTuMp103k1L0UhcDtM2PxLEeFLNtAY+8EQiOvtSfdTeD41rtzAtcCEXsO9y5CqA10FApB5TqI59K0/D8L3YvE/ffMDB9nu0WD/u8vKufXrr4c4G0y5nw9tJVWADOS0eI/cGlZyeEbCwhiOM3/AKpjLgeHtYju7bZE0TwiAIgwSTqKMcSxt1cXgraexd/ajKuoyTrOo16bVTfgTmxftllBvYoXPvEAeEkHTfT0ovj+FlsbhbgIAtAypBkysacvjVJy/oGkLs1iHufWDcbMFvMqaAZVCLoIHUneg2G4nfzcSzMQtkDufZ8PtAxpPKtJ2dwJRLn3s9xm0nSY0156UKwvB8q405x9sRrDeGS2/wAeVNt0v9ipWDuI8QxA4TauLcbvmgFyYYjOw1YeQ+VWeIYh/ruBzuVQ2w1zxQplDJfkdudXOL8Ez4G1h80QQc2UkGJbbf73yrK9vcabV63DDMltFC76QJYrHTbz9Kylkkv9D/6QdouMLaxt68lxWDLkS2V55VlzOmWRAHnWXwWNOS4GyiSCD56zEnodPdTMNw27iGLBdSrXCxPIZtfUlYjnVNUC+AQWeNR000HXUxJ5gbUdjJr94akQVgEwToZ/H9ajxKZkI5oNRyI0IM9SdI2qHiC5FyAnfxef/iYpyY3x7yGABHy1ox8jRLhOLW7dm5bNsu7hQpkALBaZ1nVTGnnQEOJn+/dVvGWvE2mg5/hUT2hOmo0j86aGajgnCbQwvfPdGcsQLS+1kjUzsBJG9X+DYKyXu3LjoihQE7xlU5pAOXXXSfcaGcMsssxOUrp0JkSR/fKp7tg+GSDnJQqYGupU68tYrNx3Y9Uaex2IU2kuLdtsGLTDSu86ETrJFdA4BwpLeGtW4DQqhmH3ip93MVxXhXELlk/ZubZBK5XkqG31WYgxv1rtHZnHXLli33iZWjdToZ1kROX0rWFWQzAcS7M58a9zv7YU4gv3eS5MC5LCdp89ql7Q8GufWrzW8abKyAEyXSVB0IBDRBM7aa1uctqSfFMmSe7GvM6tM0249rUtJneWs6+viopBZnfpF4EMU2G+1FrJbbe2zyDlPIiIyfOqvE+E3LnDsPaONee8fPcKXD3ikxlZc8kDMNyRpWyxDW1y582okZ2tr7hmP4VEb1qIkR072z+E02lYWBOy3Ce54birIu5iWufaKjLkJtqBC5pJETIND+yfDblq5cN3G3L6tYcZGW5pzzeJyJAB+NbG01sozKHKjfK9sjzkgx6zVZcTZ5MP+LZ2+NGlQrMF2d4JbwN0XnxCuqI6kd0y7pBMkkc9qCNi5uNcAPjJi7cUZivIIvpz+dHfpD4idLdsW8hGpLhmnf7vh25amspewjW7aXXcQyZlAkmNR7oM/M1lJeCnbLj4gPb7udA2Zo55soJPuAH+zWdxeJDkhRpEe8GZ9asYR1VlZy0GcyqCTlPSOuunlVNAFY6EmSIMiZ28wDvQlWgK+KukgTM9aMcLxUWlUkhZloMaTGnnH50KxthtAQYiRoRvoNOn6U9WyWxqRoNR6jbzokugNSX+yW4xIbNsQIVWkKB0AgfPehPF4dJO6megO4kU/CXg9u4s+EoQfF94CQQOcHT40Nt8QIUKxMnQ9I/Mg1KhTAZYtFgVEi4BmB69QfM6kelEeAXEN0d4ASdBI032OunrG/SosEhzBhuCDp0/GP6V7iLWW5Ig6yRMc+VXLegYX7hGxF1VDjI2YIGykAnSCDqBM+gr3AY64tm5YuMO4usA2g9uRlY8wJiocYBcVbgzBwAGYEggj94D7pjcdaJcCspet3bNwqLpylSfvFTIA06efOpjsQb4rje8wWEWCty1eWQd/AGSZ2mR8xRyxauDi11yT3b2UA0MZgiHf0J0qlheBNAW4wInNodQwAXeIIO/uFHPqNr66uKnxd0LZOYZQscxEzPnWsE73+BeBY6RxK1BID2HBGsSHMadday2CdzwW99pmZXPjBOkXZ38vPpW3xqW2v2rudSUkSG0AJ5ihfD+EWkwl3DScr5jDOMxLEnQgADXyq6dsRWwbk8SteKQcEpiT+8daGcAusRgpLa4rFA6k7FonrHyrTYbCW1v2rsjMtkW9WEAAmJ03161WwvB7dt7WQmLV+7cHiBnvAZJMezrpVIBYgRjT/rLP/NbxCVhO0dv/wDX8Exh1E68nuD8q6e9i2LzXDqxyba6p3mUqOoNw/HypjWGgAKQAIiVXmT7PLek1YIH4bjtprQupdPducqlTIY8wAwBBG5Gux6UExQt3sdaNtw4yjPluA6IGYQR4QDpr5UAXEtawVq2VX2jcynQ23W43saQcyMQV+E1S4Yxe8w7zu7eUltDoI1iNYIMada5nPKkPydDfjuHDZTeSc0Ed7rMxtl3qfiHEbdl8tx8h+7muNJHWQhrmOKwyfXRHeWz3o+zacpaQY9MsSJ36TWn+lC2he0Xd1AV4yDXl0rRTbTY62a3AYhLtstaJcAkSt1gMwgxqoP3qH3ePYdSVa6gIMEZ7uhHUZKd2Gs5MMF/jbXmRlSCfOsJjMGHxGJKlv2rBp6xy8qU5uMU0Cjbo6Ljsfat20uOQLbgZWLXDJIkAADTTrWJ4dZTF8ROYo6kFl9sAhfumdSCtGO3aqOF2u8zZR3YIQa7cqpdhMFkxNtht3TRO8ZRHvpTk8or2CWrKna/HWsNbNi2oFxfC0K38wGYtqvjJiI1igPZHgzXjdvmclpSCIBkZSwInQEZY8qK9seH97jryojZvBnY7FcoIjz0ArU9lMCLWBvrGwufDu5pp3LEfSs5dx26js5tghHyso00UqNNNN+lUsDhSQW6MB+c/Ki9zhouXQqgAC0jADWAEDR6Rzq5wvBhrN25uVuR7hbJH/VSyfRVECW0e2LfdrmLHx65j5bxFDbXZ+8yXbioe7t8yN/IdYH4jrWr4ZggUR+hn51rMDbH+Sr2msXfy/SlBuSf4CRzjskzM922xkKqkDzmPyqXtOpR7RGunI6SGkVc7L4UC2LkauSh8sviB/vyo8vBkvJdZ97SJk9WdwSfcKrJON+hVRnOH8J726ivol0F4G+mh0PUj5E12jguC7qxatglsqKM3WFHLl6cqyHAeDoi2rkE3bYyZv4JPLlJMk1skVyFh4ELp7j+g+NXx9WRJeDh/bniBtcQxKyf2k+ypiVE6n+LWm9n+LJcKW2sNduNftwZj7OAGt5VHM6zvW54z3H1l1uYKxduFkDXHEsxZ3STp/7dO7MYiy72yuFsWWuZcvd2wTLWBePiEZYkgHWYqXCN2Wm6K/0wX3t28KUMEu+vh2yCd/OPnXOL+NurasuHPj7ydV+64A8tB06613bidiWsIUtvncgG4ubKMoJidiYoThUtveYBrJQOLeUWVI7wGGK66DWJncc6JRTfQoyaRU+jG4z8McsM7G5cBmPEdABp5QK5jxPi0rbtpbFl7dvLcIIl3zZczAjQiDpXa+B/a4cOFVQWbS2uUGGgMByJAoB2hxXc3CO4s3JUtma2Jkd1oTzP2p18hTlFOKEntnPOE2/rd4W82YtbZQdPAW8OYiNY6etH8f2axKYE27ls51vFUA1+z3Y7aqYEeY860PAMb3mINsWLVqFYh0QBtLt61v0iyPia03F7hsWrlwszhQTlJgQDGpJ6UlBJDb2ckxnAFw2HtPcuAXmkG2JJZZMNG4jY+tAsTfS5c0Vh4MomPaAEEgctD561dxty7ffvWkd4Zza+ESfCNdKHPay3Cy7Bc0eU5ZHnrPxqFVgJnJjfKBGpnfp0FW4buO7J8OSI901WDwoLDQzInoNdeRoxbw4eAhOVoVSd4MASOR1oocTL4S5cVHQaK24ge4jof60sThyEUgevkPyHnVjBN3bAlcwaQQZ5+GR6GjeFwAbC3Wbe3aBHr3iL+BNO9gAMBcYMuvOBrt/StHxXgbWltXZBF0HbllIEeuu3KKBXLQXLznKSDOoOYETy2rp+Kw/eYXC5tYD66ajwwTAiY3POJpTf1bF5oD9lMOt69csDTKgZiCdNRyIgyCR7h0oLcvm1jbqjMoR22j0B1B193Otd2POTiN21CwLIbbxSSu56UN7WcKW3cxN3Q5XLQx03G599TbUU/LDzRsLPG2GB+tNmYQIEJMFgszljzqjwftUMTeFlVdWKlvF3R8I8gmtOwai7whYAAZRtt+0HyoN2ZsC3jrawvitMZJ8XtDQDmOdaOUlNR/AklTNL2p7QDBlO8DEPmIZRbEQwABlfOmcM4/3uEu4tQxS2rHLFsk5d4IWBzql9I9pStp2ClVzTn9nV01NR9k8r8NxAUKARdAy7bGqylk0KlVk/Z7tWuMu91bDAgZizC0RE+SzrTMP2tt3ca2EW3cDh2TMUtZfDM/xRpQD6OmQ4o5UQRb1ydZGh9Ko4BivFcS/3hfyg9M9yD8tPfRm1G2OlZvOO8abC3sNbyllv3AkhgoWWVToBLGG01rKdpu1F/DYq7ZVbRVToTaDGCAdWJkmin0nrH1O5+5fU/MH/AONUe2eEnFueoB+UflRNtdAqM3j70ubbAxOYE81yiIH7pIBB84p+CsumJtgFj48whcx0EjwD2oA28hRjifBmW1dLg57JBQFTpbB8QFzdgwIYHeAQdqa7f4i0to/asFRTGqlvDmX+ICTXJ+hpCfsK2+G95cDsxDd6CpuE7EyYVQfEx3JjWp/pG4QcS1rLeFrKGnMtzUH+X0o9hr6XHPdg/ZvkzFEgMANjOsc6lxCFz40zRpJS3t5a11QiktDsf2dw4t2UWS0yZCmNlHPX7tZWxwlRcxDG8Gz3i0ZH8MqDl/PStdYa4FAViABoAlvrUHcHU93uZPgtanafhVSipRoWVOyDtHgxcw1q0XywV8WUkEhekg1F2ewiJcUhyxCERkjlG5byoriFcwDmcDUeG1HzFeYe2ykxmQxyFvXy0Wn8ackwyMrieHW1x2KvtcebgRSgtjw5QF9rP4pjoKN4XIMFfYd4Ua3cYmFBA7rWBJBMee9Xu5cknKZO5zJr/wAmtSC22WAW6Fc8CPcuvwp4K7rYZHOLGFQY1raghO5KDadLUDr0qvwa3/hb+mmdtfPuhH4mtFcsn/KV3TXuWJ1J07nruaD4JcuExEc3I/8A5A1CjTLsJ8CwwOCVu7JOVznloEFyD0+6KNYC2x4ZdAAMrd0j+tDuFXba8OVDctBzZYhCwzaljAXNv5RRLhVgHBuYUGLniIB0CmNTtTjFLoTMz2dw/wDglOUftW8RGp0XTXlqeVaLs8kC8AVBPd6MVggO2b2tNpoTwG7bOGFsXFa4rlmURIViApPkSD8KN8FuKhvMzi2iqpZmiAJfmRpRFaG/JfF8IAGZQwUTAWJjWI0OvSlfxV0GFuOFIEBbamB0k/3rXuHxNu6ouW3FxDMPG8GNNOood2m4ycLbDhM7tooJgDYSeZGu1U6S2SnZOyuTmOctpr3VmdCSOXIkn3mnYe00qFNxI2ISyAIXKNhI8Ph05aVzrFdu8Qhk3AP4EtqdOW/61qexfa5sZcNq4hFxVzhgsBgNCCNQCJB+NRGSY2mjROboMZ7zRzDWx8NNKz+HUreCAHP3pYcjB1mds2jGetN7cdqmwjC0kKxUMXIzHUkBUXYnQmTQn60Vwv1kXgMTl7ww9ssZgsCm2bKYyj0pv0gSfZuLa3JgvdUf6wfgKhuI8nW6fPOuvx9B8KFdjO0TYxHDgFkg51EBgZGq/dYEbUF7Zdsbli81i0jAqAWcBSZImFnYAc4PPpTtVYqdmthxqO9B/nTqT+JJ95qO/Y71Ht3TdZGHiUsPFrPLXlNc0wna3EMZW+875XCn5REeldD7PcRa/ZFx1CtzjY6aEdPSpUk3Q2meHhtq6DbUFV7vKAA0AZgTsJkiRPpWVwfDTa4mbVpspS0IbxbC5bZuU6pmG3OtjiOI2rH2l5mVNFzLOhO0xrGlBMNdtni124Ln2f1ct3mbTLCGc3SBRKK0CZnu2OCdFsd6yvcfMGOp8Xd21mSBrmLa+dOw2G7plVyD3bAEjaV3jTXarPa/i1nEXMOLdx3Fu54i4YAAldQW/loljrYa9dIOYG6xBkGdTB9D1pVtjXQAxPZK4Ll1QysyzcU5lAIdztymBJ6TTeGKPqWJP/tQP+Kmnrp8q347Q4a6WtpigWggBgBJynQEqJrBcEE4C8ets/8AcWnjQkwGeH3LkNbUsURSQASQCXEgaTqPnXUeCItzCWctpWylgYZtPENRDSJGsHaI9QPY21aVg9y4luUCJnjxmSSNdNgDW6Wwlu2ZKIq6szBYjqZ0HrTjCyZPYJ4Xw4LjO9GHyO1rKbma4RA2WCcvLendoOFrc71WsM4eAxVnEgxMQDG1XsJibV2e6u2bkbhQp/A0/H3rVojvLlq0G9kPlBPWJImrcFQstlfhGAC4IWxaZVCmELNmEGdyJqlg+FqMVbudw4YIyhyzwASJBERr+VGsOisMym2wI0ZQCPkdaq2cXZuMbaXrDONCq5CZ6aNvQ47sLPO1fClvWcty0ziYhGYGDB5TzUVD2Z4UtvDvZS06IZGV2Yk5gZgkA/8AmruIRLal2NpFUAlmUAAeZLRTMFctXPFbe1cUb5APdz0orY70A+zHA7di6Ht2LlskEEu7kddiOoqrxLs4FxTXrdpu8a8jkszZHM5oiIUZoo+mMstcNpb1k3AYKAKSD0id/KoeK461bdUL21dnSLZy5sveKpaN8oqZRTjQJ7H8U4Mty3at3VF0ocxLOwJfcsSGHMnTYadKl4hh1Z5iy2g1JSfxqTGYq1ZCm5cS0GMCQok6dR1I+Ne43ilmy2S5fyNE5YXQHblVNIVnPPrV63YxoIdwb91ZLyVGY6FSPZKtuD00rO4PH3FdbgJDIigGOYUgT8SfdWp4Lb7y3jxcHiBbLzhiwg/186CcF4ScRcFsHKvtM0fcUax5mY99cU23JfkuX4HdmePXBj7VpXfumbKVLEgjKSfDsGkTPzor9IfGL1u8mR7iqRIUMViI18J11NZ7hFsLxdQogC8wAHIBWAop9KX7W1/K34pXQtRoaWzoHAce9zC27jZmc2tXge0MwmJ3muc2uM4kYlm7654LuUyzEFQQDK7GeldA7LLGCtD+Bj8Xc1z2wF729Mz9Ybl/EKp9IleTW/SZxS7ZsobbMoLZSAYzTJ3BnYVF9HPEbrPet3He4qqrKpMwSSDBY7HTSvPpWw73LFtUXMc4MCNgrydelO+j0L3t4qCD3azP81P9wvBlO0WKu3cbeU3bn2RGUBiIzAHYGNJ5VvsLjLp4VnLsbndsDcnXwlhrrJMCJ3O9YTFuo4hjSwPtW9v5BW5wYz8KIX7yXAJ/mcUl3Q2YnD3G7uywZsxKMWkzreEyd4IMR00o24y4XEgD/SH/ALdA8O32VoDWETTzDqJ9NKOY5z9Wvkxrcbb/AFYpIpmMtz3ubo6fiorp+JYjhzxtmMmTMZh8q5yHBAUL4iyeLT94GuiYi5HDmJ11P/UKcQYB7Pj/ABF06AG2se64f1qx2kf/AA9/XQ91O/7zRVPg16cSQBobR1PTOvL+96s9pbgWzdmdXtLpv940r+o0m5Ug/wBjG/wVn0b/AK2qv23sg2GOsxO5I9tKzeH4tdt2MMlm6UHdZmUBSZN0iDIkSv41q+2azYceS/8AcWq04kdM41jxDsfP866D2FwqLiMoAnujm1Mk+E68tydOVc/4qn2hM8p+LGuhdjuHi3jTe7ye8sksv7pkLEc/CqmfOsnG2t+f5LvTAn0tLlvplH3FI8va2oxf7E4YWywz94LZb2tA2SenXlQ/6TwLmJw0TD5BqIOrRBHI610IpvzJ0ieojaql2EXowv0SKGS6SJ0HxzVX7ZJaN3EiALiQV11jKk/7ME6dTV36KwEF1CYJZlA6w1C+2b5MTiCXEXPCFB3+zQgnyke6lJKlvyJPZl+Fibg9PyNdh7OWQLFoxr3aGfca5NwSwBcEc4PxBrrfDzlwqRoRYBnp4WM1UV9gb0Du3CThTH/qJ/8AKsndUravEbjBH5lRSfjTNh3W5da47PbKB5MKM2Y+W4p15ptYgnngj/1LSk1YIAcHUtbBMnxkSTXR8GgFstGyTt/DWD4ThylhHnRiWWAdORB+G/nW5t3/ALNhBDG1O2nsUotO2imq0zCYZ1FxFJ1LAc+fn760vAlzYS+k65GPu7xf1rMYVCblti0DMpgabRz6aa1rezy/4bFTt3bmfTJ+lOJLBnG1K4WyRycbdM0H5VsO14Y4G0vI3EGk8leJ67fh0rJcXcHDW8ozCQfQCTr05VNie0Lvb7swy5gR/CQCNvQ0pckYtpiI+xpYcSyToLYcDlOYD151Z+kkN9YutzS0sdBpOgO29Q9lZPFA0RNiPg6T+NXvpEu/aXlyjWyuv+xVJpxtC/cEexlxjwt2mSbVyTJmcrjQjbasn2dthcXaBLBiCVUAZTlgksZkEaRArV9gm/zW3+ru/jcrM8PecbhjAHhfb+UU3Wh+Wa76SL2XCS+o71dFOUk5WIgmQfhQv6LXY2nYkZsxBJHLQ8iI3oh9JlvNgt4y3Fb1hW0qh9GFsi08/eYkenhH5VT/AFCX6bMp2LuM2PhjIlyJ1AIcR60Q7Zv/AJ5tTrpaB85kbdNdqodjVjiJHndH/N/SifbjD/50R5MjuIEby7DfltRFNp0NumaH6SLZbBsxg5VBGkfeXnNEcbhRdKOSPFbQ7DmoP51T7eqTgH0+5qeglZNXOFXS+GwzDnYt/wDQB+VU1ZN6MX9eRLf2TlWu63VI015A+WVY9aI9ksStp7jMVEIw1ndivMfy78qF4Xs1iX8Qwjidi5yDpsxFaXs92du27neYg2iiqfs5DSeU6EEVwOHI2mkO0BsDhLKYtsWzOrI2crPhLONVGmaBNWO0ww+OuKxe4i20JLIsxJGjBttRvpvW4S9YWQEtqCZICQCRsSI3FJuI2uWUeifj1FVc6NDN8J4+bdhba4e43dpBPiMgknMYUZRJ9NY5a5TGutm4twpcC3rrM2ZYy6gkKTo35V0fiGLS7bNtrjBTEwIMAzG/lTWx9gGTbB0iCoiOfxqX8l96BJeTKdoePjFIii3kbKdM+uu2kA/lBp/Z7ilvCPcbJduh0XMUUAWwN80766Tp861triluZVdTzy6xyE9B0p7YwkyE95HwnWYp5Tu2xYGGwmFW9ibt0qyh5Y5kMERkUTsSPa92lWkvYpVs4QJdW0Ce9cJOZXYnNMEKsEkSdJ1rT8RxMoe8aANQDlEmPImecV7365cvejUcmkajY6VFtfuHjZjuK4A9+O6BgkNlEExmzkACOQNOx7P3V9YlBLhurFYy/AA1dxOKRcQjhgSDECeWhqIYdwlxbismdQy5hupU6jrttXTBiaKGA4EXt272W4ZOYxkyKindidZkeyKL4i7efD9zbVMk5nctDBQMzeGIj011q5wPKcMiNcKxmUrE7OfOnjB2gCO+cZlIPhXYiDyNZPmSTV+SsLBfZ/BoVGJBbNrbjSAJB9Z0oZ2tvHvWt7ocjkeYBAitEiW7CFLdx21mGAABPSANdKBcU4W+Ius4YKoWGJaDoCRlWJanOd8doVO9A3h+KtKys1rvAm65iMw3A25Nrp763na/EKMK7soUG3Mlp2KNpG8TPuoThezNpQrKGcEhiVYSY3UajKp3oxfWVCthHuLEAO+YR0jXSKnj5WlVFR4smc74ZwRcUzG4zQLTPby6T0+6cygkflV7so2S6x7xs3dMqmdBO+h33+Nb3hlzKpC2UtD2QuXpERtpy06VznHi42MvqikFrpAgQJzQOWgO9RzTk4/XTDD7V6JcfhQt6yb1wuiMr94xJAAI00mZjQCa1B7U4Sf23vyvt8KwOJ4hdSbdxEfu2YRcQMAwJU5ZG3nUa8ZgQMPh/wDgr+lPjyUUpbNVwBjhCTeu91cy2s7POYgEMxiCACD5HaD1oRxy3ba6ULQFMShLA6QYmf7mpbePu3YtJbVQzDw20CgnzgbwN6ENcIMNo06g7j1B2pffNyb16M5wcNI03ZrhSMbwU3CbdnOFAaM7Dwk/veGdP0reYHFr3a6WyBbURrpCaqRrJBJB60P7CPcTCgPpLGMy6lCAVM9N/hU9zCBmJbB2jqfFIUnXfbn+da/K1uhRhkcx+si4zPcQEsdAoygdMoAgAHlFXuF4wtcNslcr2zZ8a6FTETBkGRvW2t9l7UENbygSVlhoTvmIjMOk1mOH9mbgcFu6yEiHF0yNZmIBB8orJ8hLhRe41w5cPbtW1CyWZZDtEGOR0jXfyowttraZbmQutshins6AjTrpFPvYbCXIL5zExL3P08qrYlx3kLPdnQGSZGgbU896vhnfQ5IqJ2TuwALCAhYDG8TmYayFgAAiNDtFRcJu3FsXe7WZlXGn7M+0demhmtRdvWFBPePoCfaHIea6VlMLiQlhgBqV8RnrA06iKrik5XsloI4TCJcttbZA022WJI38+sga0D4bwS4jgXMPdChwzPMBWXTfUMOXTWa03CrJtkG4e6DJK5p8QJ5UQxF1fZF7Nm0gZmnnyB9ankacuwpGUvXrmGxNy7btMVLQHdGYZmAfKIgH+lVu0HGPrJztYuWmIUF/F4gARGWANZ+Vb3vAGhHmN12OXqJUkddRUGJx1xWI0IjkNPhJqVFtUmDiYXg+KxisMPatFEOmVkIVd5zSPBoxJPnV6xwLHW2Rhh17xM0OXQ7jTQtoI0Gms1pxxhh90U//AC71Rfn+tXg/YNIA49+IXbXdXsMzj2iSqQYEgGPZgaRuaj4Pjb2HgJg7okHRbbqGY6zBmPx0rR//AJAP3B/vNXjdoZ5fP+lGE07TFiYbH3od7qWe6LpGZLbLDHVyH01LVHiMc0Kt03TcAGYMDm3kSTB229TW8ftH1Qf37qiHHgNe7E9efxpPjk+2FIyOL47evhLQRyIgoVLExrKj0B06E1fsdo8SEVUwjFVUKDFwaAdAIo6/H5/0Ypv/AOQN+4PhVKM15DFDXx1xt3PpURuk7kn3moiJ500rWt2OvRYFyvC9QAmvdaLCiUvTM1eZT5V5HvotBRIjudjHnRRlIUlSWjaTuPwkjlyoULkU9cQepqZRspMM27KXVQtAdASASQw1mI5idZ86snCi4gL5idYYGSOsg7igIxTdQfUCpbOPZdtPQkVi+JO00nY0/TLrcFBGpJHMBInnqSdvSnYnhSXbYI+y/iCSpEEQ2sjrNRJxl+cn4fpU+G42FEZJAohxKCpKhSbb2DsL2fu2pA8akzOZY/KOtXLWBKkFyBB2VgT+EVYPGbROtsD4/hFe3OK2mXKAAD/fSsX/AI0MsnbZam6pDMZgWukMGk8w7KCY2iABVK9hrltp7p1B3MAj/lnei+G4naChWgx6Gp0xtr7rOvp+kmtZrKGPQlad0Z5AxOizO8KavWsHeOo7wepI+M0XXEpzuv8AAj8BTlvWubT65q5o/wCKltyf9FPkfoHWEdSQ5zHqYMCoRZtWVa41u0CzSMiKHYkz7W88yatYi+hclIjTbTWhGL7y40kSF0ToB+prZ0kki+Djyl9tIoZGYkkbkn4ma9OGNW1Rxyp2Vv7FCaR6bfpr+QcVZSGXcGfh1otZS3fUkJbFzch7aMZ6gkSR8xUBVqgKOCGUQw2I3FJ0RyQhyLbV+7CmARgCHUAjQCFAC8soAgLqY9TTbnDrh8Ssbk8g8R5QSKdYxZYZrgCsRBA5xz99FbWNtFQGiQADofkaThGcUm3o8t5QkzM3sEykypX+ZT+M7VD3BYgAAnqFFa36za5XY8iZ/HWvVv2//VX/AGYFYf8AlV6kV8j9GaTgt06hMg6s2XX0Ovyq5fwhZBaVych8OZgVnWdlBFG++tD7wPmSTVNMSnel5EdfdXTx8cePpmcm5GcxXA7rIUYBgRByEHQ7x0qTA9lQv7Rpn7phjHSAI5RrWobHWT5/7NQtxFB7I+YH9aI8aj02G2UH4aj+EJlybZRJA6GTt6VNgeGomvtHlKwF/wDsaZb4gFLGV8XmTGteXOJT9/4D8zT+NOV1sKZ7oqNc0zFSvnE6AGq1o9YNQ/WEHU+pmvfrg5CqUZWNUiVrA6VWu4YUmxdeG/W8b8ktorthahbB1bNw1Gz1VklU4WKXdVYZ6jL0WFDVtCn9yKau007P50mOhi15SpUIZ621e0qVIZKteNSpUhCNRNuaVKgBrU5aVKhCRIK9pUqb7Gxy040qVA0NelSpVDGKprdKlUy6BEq/eqR9hSpVmaopdfWjKez/AH0pUqkaIGpt7avaVIDzDbH1/IU1edKlVxJZ629JtzXlKlEkju7UPuUqVax7IkKvKVKrJHV4KVKqRSHilSpUyRLtT6VKmIYa8pUqBjGqJ9qVKgCWvKVKpGf/2Q==" alt="Loyola College" class="w-full h-48 object-cover rounded-t-lg">
          <div class="p-4">
            <h3 class="text-xl font-bold text-blue-500">Loyola College</h3>
            <p class="mt-4 text-gray-600">
              Known for its management and arts programs with a strong emphasis on academic excellence.
            </p>
          </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="https://media.getmyuni.com/azure/college-image/big/psg-college-of-arts-and-science-psgcas-coimbatore.jpg" alt="PSG College of Technology" class="w-full h-48 object-cover rounded-t-lg">
          <div class="p-4">
            <h3 class="text-xl font-bold text-blue-500">PSG Arts and Science</h3>
            <p class="mt-4 text-gray-600">
              Celebrated for its top-notch education and extensive network with professionals.
            </p>
          </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="https://www.kongu.ac.in/webalbum/img/mba.jpg" alt="PSG College of Technology" class="w-full h-48 object-cover rounded-t-lg">
          <div class="p-4">
            <h3 class="text-xl font-bold text-blue-500">Kongu Engineering College</h3>
            <p class="mt-4 text-gray-600">
              Famed for its leading-edge curriculum and robust ties to the business world.
            </p>
          </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="https://content.jdmagicbox.com/comp/erode/56/9999pmulchnstd2800056/catalogue/kongu-arts-and-science-college-erode-ho-erode-colleges-yzvrm7i.jpg" alt="PSG College of Technology" class="w-full h-48 object-cover rounded-t-lg">
          <div class="p-4">
            <h3 class="text-xl font-bold text-blue-500">Kongu Arts and Science College</h3>
            <p class="mt-4 text-gray-600">
              Esteemed for its exceptional academic offerings and valuable industry partnerships.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto text-center">
      <p class="text-sm">&copy; MCA Guide. All rights reserved.</p>
    </div>
  </footer>

</body>

</html>