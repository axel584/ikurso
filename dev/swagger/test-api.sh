#!/bin/bash

# Script pour tester les endpoints de l'API Ikurso
# Usage: ./test-api.sh [base_url]

BASE_URL=${1:-"http://localhost:8080"}
API_BASE="$BASE_URL/api.php"

echo "🧪 Test des endpoints API Ikurso"
echo "Base URL: $API_BASE"
echo "================================"

# Test 1: Inscription d'un utilisateur de test
echo -e "\n📝 1. Test d'inscription..."
TIMESTAMP=$(date +%s)
REGISTER_RESPONSE=$(curl -s -X POST \
  "$API_BASE?path=auth/register" \
  -H "Content-Type: application/json" \
  -d '{
    "enirnomo": "testuser'$TIMESTAMP'",
    "pasvorto": "testpass123",
    "retadreso": "test'$TIMESTAMP'@example.com"
  }')

echo "Réponse inscription: $REGISTER_RESPONSE"

# Test 2: Connexion avec un compte existant
echo -e "\n🔐 2. Test de connexion..."
LOGIN_RESPONSE=$(curl -s -X POST \
  "$API_BASE?path=auth/login" \
  -H "Content-Type: application/json" \
  -d '{
    "identigilo": "lernanto1",
    "pasvorto": "test"
  }')

echo "Réponse connexion: $LOGIN_RESPONSE"

# Test 3: Récupération des informations utilisateur
echo -e "\n👤 3. Test informations utilisateur..."
ME_RESPONSE=$(curl -s -X GET \
  "$API_BASE?path=auth/me")

echo "Réponse /me: $ME_RESPONSE"

# Test 4: Liste des tekstoj
echo -e "\n📚 4. Test liste des tekstoj..."
TEKSTOJ_RESPONSE=$(curl -s -X GET \
  "$API_BASE?path=tekstoj?limit=3")

echo "Réponse tekstoj (3 premiers):"
echo "$TEKSTOJ_RESPONSE" | python3 -m json.tool 2>/dev/null || echo "$TEKSTOJ_RESPONSE"

# Test 5: Recherche dans les tekstoj
echo -e "\n🔍 5. Test recherche tekstoj..."
SEARCH_RESPONSE=$(curl -s -X GET \
  "$API_BASE?path=tekstoj?q=la&limit=2")

echo "Réponse recherche 'la':"
echo "$SEARCH_RESPONSE" | python3 -m json.tool 2>/dev/null || echo "$SEARCH_RESPONSE"

# Test 6: Détails d'un teksto spécifique (si disponible)
echo -e "\n📖 6. Test détails teksto..."
# Essayer de récupérer le premier teksto de la liste
FIRST_ID=$(echo "$TEKSTOJ_RESPONSE" | python3 -c "
import json, sys
try:
    data = json.load(sys.stdin)
    if 'data' in data and len(data['data']) > 0:
        print(data['data'][0]['id'])
    else:
        print('none')
except:
    print('none')
" 2>/dev/null || echo "none")

if [ "$FIRST_ID" != "none" ]; then
    TEKSTO_DETAIL=$(curl -s -X GET "$API_BASE?path=tekstoj/$FIRST_ID")
    echo "Détails du teksto ID '$FIRST_ID':"
    echo "$TEKSTO_DETAIL" | python3 -m json.tool 2>/dev/null || echo "$TEKSTO_DETAIL"
else
    echo "Aucun teksto disponible pour test détaillé"
fi

# Test 7: Test erreurs
echo -e "\n❌ 7. Test gestion d'erreurs..."
ERROR_RESPONSE=$(curl -s -X GET \
  "$API_BASE?path=nonexistent")

echo "Réponse endpoint inexistant: $ERROR_RESPONSE"

echo -e "\n✅ Tests terminés!"
echo -e "\n💡 Pour plus de tests, utilisez l'interface Swagger:"
echo "   $BASE_URL/dev/swagger/"