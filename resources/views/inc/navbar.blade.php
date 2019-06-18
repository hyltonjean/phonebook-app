<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<a class="navbar-brand" href="/">Phonebook App</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
		aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav mr-auto pl-3">
			<li class="nav-item {{Request::is('/') ? 'active' : ''}}">
				<a class="nav-link" href="/">Contacts</a>
			</li>
			<li class="nav-item {{Request::is('contact/create') ? 'active' : ''}}">
				<a class="nav-link" href="/contact/create">Create Contact</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0" action="search" method="GET">
			<input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</nav>
