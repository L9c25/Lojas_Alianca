<head>
    <link rel="stylesheet" href="./components/footer/Footer.css?v=<?php echo time(); ?>">
</head>
<footer id="container-footer">
    
    <!-- sec de endereco -->
    
    <section class="sections" id="section-endereco">
        <div id="sec-endereco">
            <h2>Endereço</h2>
            <p>Avenida Antônio Carlos Magalhães, 542 - Sandra Regina <br> Barreiras - BA <br>47802-000
            </p>
        </div>
        <div id="sec-local">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d344.7592383921203!2d-44.99109191834424!3d-12.145947572053622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x75f8aa0de29a3a7%3A0xea1d4bad9eff5f25!2sLojas%20Allian%C3%A7a!5e0!3m2!1spt-BR!2sbr!4v1700950001757!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </iframe>
        </div>
    </section>
    <section class="sections" id="contato">
        <div id="card1-contatos">
            <h3>Entre em contato</h3>
            <p>Redes Sociais</p>
            <div id="container-contato-svg">
                <picture id="x">
                    <img class="svg-contato" src="./components/footer/assets/X.svg" alt="img X (antigo twitter)">
                </picture>
                <picture id="Instagram">
                    <img class="svg-contato" src="./components/footer/assets/insta.svg" alt="img instagram">
                </picture>
                <picture id="Facebook">
                    <img class="svg-contato" src="./components/footer/assets/face.svg" alt=" img facebook">
                </picture>
            </div>
            <div id="card2-contatos">
                <h3>Telefone/e-mail</h3>
                <picture>
                    <img src="./components/footer/assets/telefone.svg" alt="">
                    <label><a href="">xx-xxxxxxxx</a></label>
                </picture>
                <picture>
                    <img src="./components/footer/assets/mail.svg" alt="">
                    <label><a href="mailto:xx@allianca.com">xx@allianca.com</a></label>
                </picture>
            </div>
        </div>
    </section> 


    <section id="atendimento">
        <div id="card1-atendimento">
            <h3>Formas de pagamento</h3>
            <div id="svg-formasPag"> 
                <img src="./components/footer/assets/elo.svg" alt="">
                <img src="./components/footer/assets/mastercard.svg" alt="">
                <img src="./components/footer/assets/visa.svg" alt="">
                <img src="./components/footer/assets/boleto.svg" alt="">
                <img src="./components/footer/assets/pix.svg" alt="">
            </div>
        </div>
        <div id="card2-atendimento">
            <h3>Atendimento ao cliente</h3>
            <div id="links-card2">
                <ul>
                    <li>
                        <img src="./components/footer/assets/headset.svg" alt="">
                        <label for=""><a href="#">Nossos canais de atendimento</a></label>
                    </li>
                    <li>
                        <img src="./components/footer/assets/lupa.svg" alt="">
                        <label for=""><a href="#">Troca e Devoluções</a></label>
                    </li>
                    <li>
                        <img src="./components/footer/assets/box.svg" alt="">
                        <label for=""><a href="#">Meus Pedidos</a></label>
                    </li>
                    <li>
                        <img src="./components/footer/assets/boleto.svg" alt="">
                        <label for=""><a  href="#">2º Via de Boleto</a></label>
                    </li>
                    <li>
                        <img src="./components/footer/assets/rule-svgrepo-com.svg" alt="">
                        <label for=""><a href="#">Regras e Promoções</a></label>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</footer>