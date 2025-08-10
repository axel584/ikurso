#!/bin/bash

# Script de démarrage pour l'interface Swagger Ikurso API
# Usage: ./start.sh [port]

PORT=${1:-8080}
BASE_URL="http://localhost:$PORT"
SWAGGER_URL="$BASE_URL/dev/swagger/"

echo "🚀 Interface Swagger - Ikurso API"
echo "================================="
echo "Base URL: $BASE_URL"
echo "Documentation: $SWAGGER_URL"
echo ""

# Vérifier si le serveur est en cours d'exécution
echo "🔍 Vérification du serveur..."
if curl -s -f "$BASE_URL" > /dev/null; then
    echo "✅ Serveur accessible sur $BASE_URL"
else
    echo "❌ Serveur non accessible sur $BASE_URL"
    echo ""
    echo "💡 Pour démarrer le serveur Docker:"
    echo "   cd /home/axel/Documents/code/ikurso"
    echo "   docker compose up --build"
    echo ""
    exit 1
fi

# Vérifier l'API
echo "🔍 Vérification de l'API..."
API_RESPONSE=$(curl -s "$BASE_URL/api.php?path=tekstoj&limit=1")
if echo "$API_RESPONSE" | grep -q '"data"'; then
    echo "✅ API funktionelle"
else
    echo "⚠️  API peut avoir des problèmes"
    echo "Réponse: $API_RESPONSE"
fi

# Vérifier l'interface Swagger
echo "🔍 Vérification de l'interface Swagger..."
if curl -s -f "$SWAGGER_URL" > /dev/null; then
    echo "✅ Interface Swagger accessible"
else
    echo "❌ Interface Swagger non accessible"
    exit 1
fi

echo ""
echo "🎉 Tout est prêt!"
echo ""
echo "📚 Accès à la documentation:"
echo "   $SWAGGER_URL"
echo ""
echo "🧪 Test rapide de l'API:"
echo "   curl '$BASE_URL/api.php?path=tekstoj&limit=3'"
echo ""
echo "👥 Comptes de test disponibles:"
echo "   • lernanto1 / test (élève)"
echo "   • korektanto1 / test (correcteur)" 
echo "   • administranto / test (admin)"
echo ""

# Optionnel: ouvrir dans le navigateur (si disponible)
if command -v xdg-open &> /dev/null; then
    read -p "🌐 Ouvrir dans le navigateur? (y/N) " -n 1 -r
    echo
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        xdg-open "$SWAGGER_URL"
    fi
elif command -v open &> /dev/null; then
    read -p "🌐 Ouvrir dans le navigateur? (y/N) " -n 1 -r
    echo
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        open "$SWAGGER_URL"
    fi
fi

echo "✨ Interface Swagger prête à utiliser!"