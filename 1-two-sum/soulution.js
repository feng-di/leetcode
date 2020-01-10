/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */
twoSum = (nums, target) => {
    const m = new Map();
    for (const [i, v] of nums.entries()) {
        const k = target - v;

        if (m.has(k)) {
            return [m.get(k), i];
        }
        m.set(v, i);
    }
};