<div class="comments">
    <div class="comments__container d-flex flex-column justify-content-center align-items-center">
        <h2 class="comments__title">NEWSLETTER</h2>
        <p class="comments__description">Lorem ipsum dolor sit amet consectetur.</p>
        <form class="comments__form">
            {{ csrf_field() }} 
            <input class="comments__input" type="text"  name="name" placeholder="name"/>
            <input class="comments__input" type="text"  name="message" placeholder="message"/>
            <input class="comments__button" type="button" value="MESSAGE NOW"/>
        </form>
    </div>
</div>