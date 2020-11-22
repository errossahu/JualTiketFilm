<nav class="nav flex-column">
    <!-- Very little is needed to make a happy life. - Marcus Antoninus -->

    @foreach($list as $row)
    <a href="" class="nav-link {{ $isActive($row['label']) ? 'active':' '  }}" >
    {{$row['label']}}
 
    </a>
 
    @endforeach
</nav>