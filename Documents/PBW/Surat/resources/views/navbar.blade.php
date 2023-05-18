<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
 
</head>
<body class="font-[Poppins] bg-gradient-to-tl from-[#0a94a8] to-[#260978] h-screen">
    <nav class="p-5 backdrop-blur-xl bg-transparent fixed w-full top-0 shadow-lg mx-auto md:flex md:justify-between md:items-center">
       <div class="flex justify-between items-center">
        <span class="corsor-pointer">
            <img class="h-16 inline" src="images/tulisSuratIcon.png" alt="">
            
    </span>
    <span class="text-3xl cursor-pointer md:hidden block mx-2">
        <img class="h-10" src="images/fiturIcon.png" onclick="Menu(this)" alt="">
    </span>
        </div>
            <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute w-full left-0 md:w-auto md:py-0 py-4 md:pl-0  pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 text-white">
                <li class="mx-4 my-6 md:my-0">
                    <a class="text-xl hover:text-yellow-300 duration-500" href="/#">Home</a>
                </li>
                <li class="mx-4 my-6 md:my-0">
                    <a class="text-xl hover:text-yellow-300 duration-500" href="/#fitur">Feature</a>
                </li>   
                <li class="mx-4 my-6 md:my-0">
                    <a class="text-xl hover:text-yellow-300 duration-500" href="/#syarat">Conditions</a>
                </li>
                <li class="mx-4 my-6 md:my-0">
                    <a class="text-xl hover:text-yellow-300 duration-500" href="/#tentang">About</a>
                </li>
            </ul>
        
        <div>
    </nav>

    <footer class="bottom-0 mt-8">
        <div class="p-10 bg-gray-800 text-gray-200">
            <div class="max-w-7xl mx-auto">
                TulisSurat adalah sebuah platform online yang dirancang untuk memudahkan pembuatan surat. Dengan
                TulisSurat, pengguna dapat membuat surat dengan cepat dan mudah menggunakan berbagai format surat
                yang telah tersedia. Platform ini didesain agar mudah digunakan, sehingga pengguna dapat fokus pada
                isi surat tanpa khawatir dengan teknis penulisan surat. Tujuannya adalah untuk membantu pengguna
                membuat surat yang terlihat profesional dan mudah dibaca.            
            </div>
        </div>
    </footer>
        {{-- Navbar end --}}

        <script>
            function Menu(e){
                let list = document.querySelector('ul');
    
                e.name === 'menu' ? (e.name = "close", list.classList.
                add('top-[80px]') , list.classList.add('opacity-100'), 
                list.classList.add('bg-gradient-to-tl'),  list.classList.add('from-[#0a94a8]'), list.classList.add('to-[#260978]') 
                ) :(e.name = "menu", list.classList.remove('top-[80px]')
               , list.classList.remove('bg-gradient-to-tl'),  list.classList.remove('from-[#0a94a8]'), list.classList.remove('to-[#260978]') )
            }
        </script>
</body>
