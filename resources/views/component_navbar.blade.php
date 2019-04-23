<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li @if($current=="home") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/">Home </a>
            </li>
            <li @if($current=="produtos") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/produtos">Produtos </a>
            </li>
            <li @if($current=="pessoas") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/pessoas">Pessoas </a>
            </li>
            <li @if($current=="leiloes") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/leiloes">Leiloes </a>
            </li>
            <li @if($current=="lances") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/lances">Lances </a>
            </li>
        </ul>
    </div>
</nav>