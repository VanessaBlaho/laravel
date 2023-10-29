

<header>
    <div class="nav">
        
            <a href="{{ route('index') }}" class="{{ $current_page == 'index' ? 'highlighted' : '' }}">Home</a>
            <a href="{{ route('about-us') }}" class="{{ $current_page == 'about-us' ? 'highlighted' : '' }}">About us</a>
            <a href="{{ route('login') }}" class="{{ $current_page == 'login' ? 'highlighted' : '' }}">Log-in</a>
            <a href="{{ route('bookshop.show',['id' => 1]) }}" class="{{ $current_page == 'bookshop.show' ? 'highlighted' : '' }}">Bookshop</a>

           
        
    </div>
</header>

