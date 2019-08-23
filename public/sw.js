var staticCacheName = "S_C" + new Date().getTime();
var filesToCache = [
    '/css/app.css',
    '/js/app.js',
];
self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(staticCacheName)
            .then(cache => {
                return cache.addAll(filesToCache);
            })
    )
});
self.addEventListener('fetch', event => {
    console.log("Fetch" + event);
});
