<?php
declare (strict_types = 1);

namespace app\http\middleware;

class Check
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        var_dump($_COOKIE[session_name()]);
        return $next($request);
    }
}
