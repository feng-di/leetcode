<?php

class Solution {

    /**
     * Complexity is O(n*n)
     *
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $length = count($nums);

        for ($i = 0; $i < $length; $i++) {
            for ($j = $i + 1; $j < $length; $j++) {
                if ($target === $nums[$i] + $nums[$j])
                    return [$i, $j];
            }
        }

        return [];
    }


    /**
     * Use hash table to compare, O(n)
     *
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum_2 ($nums, $target) {
        $map = array();
        foreach ($nums as $key => $num) {
            $map[$num] = $key;
        }
        foreach ($nums as $key => $value) {
            $targetItem = $target - $value;
            if (isset($map[$targetItem]) && $key != $map[$targetItem]) {
                return array($key, $map[$targetItem]);
            }
        }
        return array(0, 0);
    }
}