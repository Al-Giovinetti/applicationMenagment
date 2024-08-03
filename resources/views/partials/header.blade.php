<header>
    <div class="container">
        <div class="row justify-content-between align-items-center align-items-sm-end">
            <div class="col-3 col-md-5">
                <img  src="{{ asset('media/peraJob.jpg') }}" alt="logo">
            </div>
            <div class="col-5 text-end col-sm-7">
                <div class="d-none h-100 d-sm-flex flex-column justify-content-end">
                    <nav>
                        <ul class="d-flex justify-content-between list-unstyled">
                            <li>
                                <a href="#">Candidature</a>
                            </li>
                            <li>
                                <a href="#">Aggiungi</a>
                            </li>
                            <li>
                                <a href="#">Eliminati</a>
                            </li>
                        </ul>
                    </nav>
                    <p class="text-center d-none d-sm-block mb-1 mt-4">Inserisci e registra le tue candidature</p>
                </div>
                <i class="fa-solid fa-burger d-sm-none"></i>
            </div>
            <nav class="d-sm-none nav-collapse">
                <ul class="d-flex justify-content-around list-unstyled">
                    <li>
                        <a href="#">Candidature</a>
                    </li>
                    <li>
                        <a href="#">Aggiungi</a>
                    </li>
                    <li>
                        <a href="#">Eliminati</a>
                    </li>
                </ul> 
            </nav>
        </div>
    </div>
</header>

<script>
    let headerHamburger = document.querySelector('header i');
    headerHamburger.addEventListener('click',function(){
        const navCollapse = document.querySelector('nav.nav-collapse');
        if(navCollapse.classList.contains('expand')){
            navCollapse.classList.remove('expand');
        }else{
            navCollapse.classList.add('expand');
        }
    })
</script>