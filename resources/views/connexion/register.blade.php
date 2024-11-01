@extends('layouts.app')
@section('contenu')

<!-- Common Banner Area -->
<section id="common_banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="common_bannner_text">
					<h2>S'inscire</h2>
					<ul>
						<li><a href="{{ route('show_accueil') }}">Accueil</a></li>
						<li>
							<span><i class="fas fa-circle"></i></span> S'inscire
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
						<h2>S'inscrire</h2>
					</div>
					<div class="common_author_form">

						<!-- The form for registering a new user -->
						<form action="{{ route('create_account') }}" method="post" id="main_author_form">
							@csrf
							<div class="form-group">
								<input
									type="text"
									class="form-control"
									name="prenom"
									placeholder="Prénom *"
									required />
							</div>
							<div class="form-group">
								<input
									type="text"
									class="form-control"
									placeholder="Nom *"
									name="nom"
									required />
							</div>
							<div class="form-group">
								<input
									type="text"
									class="form-control"
									placeholder="Email *"
									name="email"
									required />
							</div>
							<div class="form-group">
								<input
									type="text"
									class="form-control"
									placeholder="Numéro de téléphone"
									name="numero_telephone" />
							</div>
							<div class="form-group">
								<input
									type="text"
									class="form-control"
									placeholder="Identifiant *"
									name="username"
									required />
							</div>
							<div class="form-group">
								<input
									type="password"
									class="form-control"
									placeholder="Mot de passe *"
									name="password"
									required />
							</div>
							<div class="common_form_submit">
								<button type="submit" class="btn btn_theme btn_md">S'inscire</button>
							</div>
							<div class="have_acount_area other_author_option">
								<p>
									Vous avez déjà un compte ?
									<a href="{{ route('show_login') }}"> Se connecter </a>
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