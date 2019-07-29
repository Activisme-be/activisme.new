<div class="card shadow-sm">
    <div class="card-header">
        <i class="fas fa-list-alt fa-fw mr-2"></i> Menu:
    </div>

    <div class="list-group list-group-flush">
        <a href="{{ route('admin.news.overview') }}" class="list-group-item list-group-item-action">
            <i class="icon-sidenav fa-fw far fa-newspaper mr-2"></i> Nieuws artikelen
        </a>

        <a href="{{ route('admin.news.categories.overview') }}" class="list-group-item list-group-item-action">
            <i class="icon-sidenav fas fa-tags fa-fw mr-2"></i> Categorieen
        </a>
    </div>
</div>
