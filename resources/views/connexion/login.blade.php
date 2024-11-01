@extends('layouts.app')
@section('contenu')

<!-- Common Banner Area -->
<section id="common_banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="common_bannner_text">
					<h2>Connexion</h2>
					<ul>
						<li><a href="{{ route('show_accueil') }}">Accueil</a></li>
						<li>
							<span><i class="fas fa-circle"></i></span> Connexion
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!--  Common Author Area -->
<section id="common_author_area" class="section_padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="common_author_boxed">
					<div class="common_author_heading">
						<h2>Se connecter à son compte</h3>

							<!-- Affichage du message d'erreur -->
							@if ($errors->has('login'))
							<div class="alert alert-danger mt-3" role="alert">
								{{ $errors->first('login') }}
							</div>
							@endif
					</div>
					<div class="common_author_form">
						<form action="{{ route('login') }}" method="post" id="main_author_form">
							@csrf
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Identifiant" name="username"
									required />
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Mot de passe" name="password"
									required />
								<a href="forgot-password.html">Mot de passe oublié ?</a>
							</div>
							<div class="common_form_submit">
								<button type="submit" class="btn btn_theme btn_md">Se connecter</button>
							</div>
							<div class="have_acount_area">
								<p>
									Vous n'avez pas de compte ?
									<a href="{{ route('show_register') }}">S'inscire maintenant</a>
								</p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection