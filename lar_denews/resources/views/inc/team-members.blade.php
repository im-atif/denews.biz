<div class="row">
    @foreach($users as $key => $user)

    <?php $offsetClass = $key === 3 || $key === 5 ? 'offset-lg-2' : '' ?>
    <div class="col-lg-4 {{ $offsetClass }}">
        <div class="axil-team-block m-b-xs-30">
            <a href="{{ route('user.single', ['slug' => $user->slug]) }}" class="d-block img-container">
                <img src="/uploads/team/{{ $user->slug }}.jpg" alt="{{ $user->name }}">
            </a>

            <div class="axil-team-inner-content text-center">
                <h3 class="axil-member-title hover-line"><a href="{{ route('user.single', ['slug' => $user->slug]) }}">{{ $user->name }}</a></h3>
                <div class="axil-designation">Publisher / Author</div>
            </div>

            <div class="axil-team-share-wrapper">
                <ul class="social-share social-share__with-bg social-share__with-bg-white social-share__vertical">
                    <li><a href="{{ 'https://' . $user->profile->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="{{ 'https://' . $user->profile->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="{{ 'https://' . $user->profile->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="{{ 'https://' . $user->profile->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    @endforeach
</div>