module.exports = {
  root: true,
  env: {
    node: true,
  },
  extends: [
    'plugin:vue/essential',
    'plugin:vue/vue3-recommended',
  ],
  parserOptions: {
    ecmaVersion: 2020,
    parser: '@typescript-eslint/parser',
  },
  plugins: ['@typescript-eslint'],
  rules: {
    'vue/valid-v-slot': 'off',
    'vue/max-attributes-per-line': [
      'warn',
      {
        "singleline": 4,
      }
    ],
    'vue/html-self-closing': 'off',
    'vue/component-definition-name-casing': ['warn', 'kebab-case'],
    'vue/component-tags-order': [
      'warn',
      {
        'order': ['template', 'script', 'style']
      }
    ],
    'no-plusplus': [
      'error',
      {
        'allowForLoopAfterthoughts': true,
      },
    ],
    'prefer-destructuring': 'off',
    'arrow-body-style': 'off',
    'no-param-reassign': 'off',
    'lines-between-class-members': 'off',
    'class-methods-use-this': 'off',
    'object-curly-newline': 'off',
    'no-console': process.env.NODE_ENV === 'production' ? 'error' : 'off',
    'no-debugger': process.env.NODE_ENV === 'production' ? 'error' : 'off',
    'no-shadow': 'off',
    'line-between-class-member': 'off',
    'linebreak-style': 'off',
    'max-len': [
      'warn',
      {
        code: 120,
      },
    ],
    indent: [
      'warn',
      2,
      {
        MemberExpression: 'off',
        SwitchCase: 1,
      },
    ],
    '@typescript-eslint/no-explicit-any': 'off',
    '@typescript-eslint/no-inferrable-types': 'off',
    '@typescript-eslint/typedef': [
      'warn',
      {
        'call-signature': true,
        parameter: true,
        variableDeclaration: true,
      },
    ],
    '@typescript-eslint/member-ordering': [
      'warn',
      {
        default: [
          'static-field',
          'instance-field',
          'static-method',
          'instance-method',
        ],
      },
    ],
    '@typescript-eslint/explicit-member-accessibility': [
      'warn',
      {
        accessibility: 'no-public',
      },
    ],
    '@typescript-eslint/no-use-before-define': 0,
  },
};
