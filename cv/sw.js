
/*self.addEventListener('install', function(event){
	event.waitUntil(
		caches.open("cv-v1").then(function(cache){
			return cache.addAll([
				'/',
				'assets/css/styles.css',
				'assets/images/profile.png',
				'assets/images/projects/project-1.png',
				'assets/images/projects/project-2.png',
				'assets/js/main.js',
				'librairies/bootstrap/css/bootstrap.min.css',
				'librairies/font-awesome/css/font-awesome.css',
				'librairies/jquery-1.11.2.min.js',
				'librairies/jquery-migrate-1.2.1.min.js',
				'librairies/bootstrap/js/bootstrap.min.js',
				'assets/js/main.js',
				'favicon.ico',
			]);
		})
	);
});


	self.addEventListener('fetch', function(event){

	console.log("Fetch response");

		event.respondWith(
			caches.match(event.request).then(function(response){
			if(response) return response;
			return fetch(event.request);
			
			})
		);
	});*/