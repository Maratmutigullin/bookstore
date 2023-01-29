# Recommendation Api

GET /api/v1/book/{book_id}/recommendations

## 200
'''json 
{
    "id":1,
    "ts":123456,
    "items": [
    {"id":1}
    ]
}
'''

## 403

'''json
{
"error": "access denied"
}
'''