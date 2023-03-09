<?php

echo @sha1(@trim('123456') . md5('mds') . md5('localhost'));