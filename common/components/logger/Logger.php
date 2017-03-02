<?php

namespace common\components\logger;

class Logger {
    
    public static $logname = 'log.log';
    public static $log_dir = "/logs/";
    public static $string;

    private static $separator = "\n--------------------------------------------------------------------\n";
    
    static function Log ($string, $logname = "log.log", $operation = "", $sep = true) {
        
        self::$string = $string;
        self::$logname = $logname;
        
        if (!file_exists (self::getLogDir())) {
            mkdir (self::getLogDir(), 0755);
        }
        
        if (!self::ValidateString()) {
            
            self::ErrorLogWrite('Ошибка, валидация строки не пройдена');
            return false;
            
        }
        
        $log = self::Logname();
        
        
        
        self::$string  = "[".date("d.m.y H:i:s") . ']  ' . $operation . '  |  ' . self::$string . ($sep?self::$separator:"\n\n");
            
        if(file_put_contents($log, self::$string, LOCK_EX | FILE_APPEND)) {
            return true;
        }
        else {
            return false;
        }
    }
    
    static private function Logname() {
        
        $log = self::getLogDir() . self::$logname;
        
        if (file_exists($log) && filesize($log) > 1048576) {
            
            $countlog = 1;
            
            $old_log = $log . '.' . $countlog;
            
            if (file_exists($old_log)) {
                $countlog += 1;
                $old_log = $log . '.' . $countlog;
            }
            
            rename($log, $old_log);
        }
        
        return $log;
        
    }
    
    static private function ValidateString() {
        
        if (empty(self::$string)) {
            self::ErrorLogWrite('Ошибка, обязательный параметр пустой.');
            return false;
            
        }
        elseif (is_array(self::$string) || is_object(self::$string)) {
            self::ErrorLogWrite('Ошибка, в параметр string передан массив или объект.');
            return false;
            
        }
        else {
            return true;
        }
        
    }
    
    static private function ErrorLogWrite($errorstring) {
        
        $errorlog = 'error.log';
        
        if(file_put_contents($errorlog, "[".date("d.m.y H:i:s") . "]  ".$errorstring."\n", LOCK_EX | FILE_APPEND)) {
            return true;
        }else {
            return false;
        }
        
        
    }
    static private function getLogDir() {
        
        return __DIR__ . self::$log_dir;
    }
    
    
}