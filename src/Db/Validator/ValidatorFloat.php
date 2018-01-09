<?php

namespace Swoft\Db\Validator;

use Swoft\Bean\Annotation\Bean;
use Swoft\Exception\ValidatorException;

/**
 * float类型验证器
 *
 * @Bean("ValidatorFloat")
 * @uses      ValidatorFloat
 * @version   2017年09月12日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class ValidatorFloat implements IValidator
{
    /**
     * 验证结果
     *
     * @param string $cloum     字段名称
     * @param mixed  $value     字段传入值
     * @param array  ...$params 其它参数数组传入
     *
     * @throws ValidatorException
     *
     * @return bool 成功返回true,失败抛异常
     */
    public function validate(string $cloum, $value, ...$params)
    {
        if (!is_float($value)) {
            throw new ValidatorException("数据库字段值验证失败，不是float类型，column=" . $cloum);
        }
        return true;
    }
}
