<?php
return array(
    // set your paypal credential
    'client_id' => 'AcyYB2aPQ-ydan1MxCixusvGZBx8aUrGDbHW31NirxKSoFiiI2J--6Hz_LYmB9LFDsYXl-LvKkjX1cts',
    'secret' => 'EJ9lq01VjubfTkpsIOgasq3nIo_dMidi0avlf6jpiCwgaoUwGp830-jnhAN8lNMNlaHiN-LFRIopZWhR',
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);