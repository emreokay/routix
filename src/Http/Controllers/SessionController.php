<?php


namespace Emreokay\Routix\Http\Controllers;

/**
 * @parent "okay"
 * @name "emre"
 * @title "Alt Grup"
 * @description "buraya açıklama gelecek"
 * @text "Buraya detaylısı gelecek"
 */
class SessionController
{
    /**
     * @belongs "ebru"
     * @description "Buraya açıklama gelecek"
     * @parameter-1 { "name": "start-date", "must": "required", "where": "query", "type": "string" }
     * @parameter-2 { "name": "finish-date", "example": "2020-02-02", "must": "required", "where": "query", "type": "string" }
     * @response-2 {"http_status_code": 200, "example": {"a": "b"} }
     * @response-1 { "http_status_code": 200, "error_code": null, "example": { "result": "success", "message": "Giriş yapma işleminiz başarılı biçimde gerçekleştirildi.", "data": { "redirect_to": "/sirius/otp/session/sms/send", "cell_phone": "0506***3148", "token_type": "Bearer", "expires_in": 86400, "access_token": "..." } } }
     */
    public function login()
    {
        dd('login');
    }

    /**
     * @belongs "ebru"
     * @description "Buraya açıklama gelecek"
     * @parameter-1 { "name": "start-date", "must": "required", "where": "query", "type": "string" }
     * @parameter-2 { "name": "finish-date", "example": "2020-02-02", "must": "required", "where": "query", "type": "string" }
     * @response-2 {"http_status_code": 200, "example": {"a": "b"} }
     * @response-1 { "http_status_code": 200, "error_code": null, "example": { "result": "success", "message": "Giriş yapma işleminiz başarılı biçimde gerçekleştirildi.", "data": { "redirect_to": "/sirius/otp/session/sms/send", "cell_phone": "0506***3148", "token_type": "Bearer", "expires_in": 86400, "access_token": "..." } } }
     */
    public function logout()
    {
        dd('logout');
    }
}
