

##Books4All APIS



* https://appbooks4all.herokuapp.com/api/register ( keys:name,email,password)
-https://appbooks4all.herokuapp.com/api/login (keys: email and password)
-https://appbooks4all.herokuapp.com/api/search/Mystery (search category-(comics/kids/mystery/fiction)
https://appbooks4all.herokuapp.com/api/rent (keys:user_id,book_id,bookname)
https://appbooks4all.herokuapp.com/api/userinfo ( keys:user_id) // 
userinfo API Returns: 
{
    "userplan": [
        {
            "plan_id": 2,
            "amountpaid": 30,
            "paymentstatus": "Done"
        }
    ],
    "rentedbooksinfo": [
        {
            "bookname": "Marvel Comics",
            "dateofissue": "2021-09-08 14:10:25"
        },
        {
            "bookname": "Marvel Comics",
            "dateofissue": "2021-09-08 14:10:53"
        },
        {
            "bookname": "Marvel Comics",
            "dateofissue": "2021-09-08 14:10:55"
        },
        {
            "bookname": "Marvel Comics",
            "dateofissue": "2021-09-08 14:10:57"
        },
        {
            "bookname": "Marvel Comics",
            "dateofissue": "2021-09-08 14:10:58"
        },
        {
            "bookname": "Marvel Comics",
            "dateofissue": "2021-09-08 14:11:05"
        }
    ]
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).


