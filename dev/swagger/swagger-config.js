// Configuration personnalisée pour Swagger UI - Ikurso API
window.SwaggerUIConfig = {
    // Intercepteur de requêtes pour remapper les URLs
    requestInterceptor: function(req) {
        // Remapper les paths Swagger vers le format API PHP
        const originalUrl = req.url;
        
        // Si l'URL contient nos endpoints, la transformer
        if (originalUrl.includes('/auth/')) {
            const pathPart = originalUrl.split(window.location.origin)[1];
            const swaggerPath = pathPart.replace(/^\//, ''); // Enlever le / initial
            req.url = `${window.location.origin}/api.php?path=${swaggerPath}`;
        } else if (originalUrl.includes('/tekstoj')) {
            const pathPart = originalUrl.split(window.location.origin)[1];
            const swaggerPath = pathPart.replace(/^\//, ''); // Enlever le / initial
            req.url = `${window.location.origin}/api.php?path=${swaggerPath}`;
        }
        
        console.log('🔄 URL remappée:', originalUrl, '→', req.url);
        return req;
    },
    
    // Intercepteur de réponses pour debugging
    responseInterceptor: function(res) {
        console.log('📥 Réponse API:', res.status, res.url);
        return res;
    },
    
    // Configuration des serveurs personnalisée
    servers: [
        {
            url: window.location.origin,
            description: 'Serveur courant (auto-détecté)'
        },
        {
            url: 'http://localhost:8080',
            description: 'Serveur de développement local'
        },
        {
            url: 'https://ikurso.esperanto-france.org',
            description: 'Serveur de production'
        }
    ],
    
    // Messages d'aide personnalisés
    customMessages: {
        urlHelp: `
            💡 <strong>Comment utiliser cette API:</strong><br>
            • Les URLs affichées ici sont simplifiées pour la documentation<br>
            • En réalité, utilisez: <code>/api.php?path=endpoint</code><br>
            • Exemple: <code>GET /api.php?path=tekstoj</code> pour récupérer les textes<br>
            • Les requêtes depuis cette interface sont automatiquement converties
        `
    }
};

// Fonction utilitaire pour tester l'API depuis la console
window.IkursoAPI = {
    baseUrl: window.location.origin + '/api.php',
    
    // Test rapide de l'API
    test: async function() {
        console.log('🧪 Test rapide de l\'API Ikurso...');
        
        try {
            // Test 1: Liste des tekstoj
            const tekstojResponse = await fetch(`${this.baseUrl}?path=tekstoj&limit=2`);
            const tekstojData = await tekstojResponse.json();
            console.log('✅ Tekstoj:', tekstojData);
            
            // Test 2: Endpoint d'erreur
            const errorResponse = await fetch(`${this.baseUrl}?path=nonexistent`);
            const errorData = await errorResponse.json();
            console.log('✅ Gestion d\'erreur:', errorData);
            
            console.log('🎉 API fonctionnelle!');
            return true;
        } catch (error) {
            console.error('❌ Erreur lors du test:', error);
            return false;
        }
    },
    
    // Inscription rapide (pour tests)
    register: async function(username, password, email) {
        const response = await fetch(`${this.baseUrl}?path=auth/register`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                enirnomo: username,
                pasvorto: password,
                retadreso: email
            })
        });
        return await response.json();
    },
    
    // Connexion rapide (pour tests)
    login: async function(username, password) {
        const response = await fetch(`${this.baseUrl}?path=auth/login`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                identigilo: username,
                pasvorto: password
            })
        });
        return await response.json();
    }
};

console.log('🚀 Configuration Swagger UI chargée pour Ikurso API');
console.log('💡 Utilisez IkursoAPI.test() pour tester rapidement l\'API');
console.log('💡 Utilisez IkursoAPI.register("user", "pass", "email@test.com") pour créer un compte');
console.log('💡 Utilisez IkursoAPI.login("lernanto1", "test") pour se connecter avec un compte test');