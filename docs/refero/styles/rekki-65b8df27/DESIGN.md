# REKKI — Refero Style

- Refero URL: https://styles.refero.design/style/65b8df27-36a3-47a6-be53-735d1f6a485d
- Site URL: https://rekki.com
- ID: 65b8df27-36a3-47a6-be53-735d1f6a485d
- Theme: dark
- Industry: ai
- Created: 2026-04-30T03:49:13.198Z
- Ranks: newest: 55, popular: 882, trending: 695

> Midnight Command Center

## Description

REKKI embodies a 'night vision command center' aesthetic, utilizing a predominantly dark theme with sharp, almost glowing typography, and carefully chosen pops of vivid blue for primary actions. The interface balances information density with generous padding within components, creating distinct content blocks that stand out against the deep night-mode background. Surface treatments are subtle, relying on slight tonal shifts for hierarchy, almost no shadows, and rounded corners which soften the otherwise assertive, utilitarian design.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Absolute Zero | #000000 | neutral | Page background, primary text on light surfaces, borders, icon fills |
| Deep Space | #040910 | neutral | Secondary card surfaces, slightly elevated from the background |
| Charcoal Grey | #0d0d0d | neutral | Muted background for cards and specific information display areas |
| Input Charcoal | #1f1f1f | neutral | Input field backgrounds, providing a subtle contrast against other dark surfaces |
| Dark Card | #2b2c2e | neutral | Primary card backgrounds, offering a distinct visual layer |
| Cloud White | #ffffff | neutral | Primary text, visible on dark backgrounds, selected interactive states, and sometimes as a button background for secondary actions |
| Steel Gray | #858585 | neutral | Muted text, helper text, inactive navigation items, and subtle borders |
| Light Steel | #8c8c8c | neutral | Secondary muted text, typically for links and less prominent information |
| Blue Neon | #0063e1 | brand | Primary call-to-action buttons, active navigation indicators, specific card accents, and important icons — this vivid blue signals interactivity and key brand elements |
| Mid Grey | #979797 | neutral | Ghost button text and borders, outline icons |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif |  | 400 | 12px | 1.2 | sans-serif — detected in extracted data but not described by AI |
| Diatype REKKI Medium |  | 400 | 16px, 18px, 56px, 72px, 86px | 1.00, 1.25, 1.33 | Headlines and prominent navigation. Its precise tracking and robust weight give digital screens an authoritative, almost technical feel. |
| Diatype REKKI Regular |  | 400, 600 | 12px, 16px, 18px, 20px, 24px | 1.33, 1.40, 1.50, 1.67 | Body text, subheadings, and informational elements. A slightly wider letter spacing than the Medium variant ensures legibility in smaller sizes while maintaining the modern aesthetic. |
| Diatype REKKI Bolder Rounded |  | 400, 700 | 12px, 14px, 16px, 20px, 72px | 1.00, 1.17 | Navigation, input fields, and small decorative labels. The rounded terminals soften the otherwise industrial feel, making interactive elements more approachable. |
| OCD-GARRI-V01 Regular |  | 400 | 13px, 15px, 16px | 1.00, 1.07, 1.23 | Supporting text, footnotes, and small interactive prompts. Its generous letter spacing and slightly condensed proportions enhance readability in tight spaces. |
| Inter | system-ui, sans-serif | 400 | 12px | 1.20 | Utility text, data labels within tables or cards, ensuring legibility at minimal sizes. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 | 0.48 |
| body | 16 | 1.5 | -0.08 |
| subheading | 18 | 1.33 | -0.126 |
| heading-sm | 24 | 1.33 | -0.648 |
| heading | 56 | 1.25 | -2.24 |
| heading-lg | 72 | 1 | -3.024 |
| display | 86 | 1 | -5.504 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "inputs": "100px",
    "buttons": "59px",
    "largeImages": "24px",
    "asymmetricCards": "30px",
    "navigationItems": "2px",
    "topRoundedCards": "38px 38px 0px 0px"
  },
  "elementGap": "20px",
  "sectionGap": "56px",
  "cardPadding": "32px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Call to action

Bold, filled button with 'Blue Neon' (#0063e1) background and 'Absolute Zero' (#000000) text. Features a large 59px border-radius for a distinct, pill-like shape. Padding: 39px top, 56px right, 37px bottom, 56px left. Text uses Diatype REKKI Bolder Rounded.

### Secondary Action Button

**Role:** Alternative call to action

Inverted button with 'Cloud White' (#ffffff) background and browser-default link color text (not a brand color, but for #0000ee from data; use 'Absolute Zero' if a browser default, or 'Blue Neon' if linked). Features a large 59px border-radius. Padding: 32px top/bottom, 44px left/right. Appears sparingly.

### Ghost Text Button

**Role:** Subtle UI interaction

Transparent background with 'Mid Grey' (#979797) text and border (when present). No specific border-radius, often inline. No padding.

### Dark Base Card

**Role:** Content container

Uses 'Deep Space' (#040910) background, 8px border-radius, and 32px internal padding on all sides. No shadow. Used for general content grouping.

### Semi-Transparent Card

**Role:** Overlay content, context cards

Background of rgba(87, 89, 89, 0.45), 8px border-radius. Padding: 0px top/bottom, 24px left/right. Used for translucent, less opaque content blocks.

### Top-Rounded Input Card

**Role:** Dialog or input grouping

Background is 'Dark Card' (#2b2c2e) with a specific 38px 38px 0px 0px border-radius. Padding: 8px on all sides. Used for input areas or top sections of modular components.

### Input Field

**Role:** Data entry

Background is 'Input Charcoal' (#1f1f1f) with 'Cloud White' (#ffffff) text. Features a 100px border-radius, creating an extreme pill shape. Padding: 21px top, 24px right, 19px bottom, 24px left. Has a subtle white inset shadow: rgba(255, 255, 255, 0.2) 0px 0px 1px 0px.

## Do's

- Prioritize 'Absolute Zero' (#000000) as the canvas background for most page sections, ensuring a dark theme is consistently applied.
- Use 'Blue Neon' (#0063e1) exclusively for primary calls-to-action, active navigation states, and key interactive elements to create focus.
- Apply a 59px border-radius to all primary and secondary action buttons, providing a distinct pill shape.
- Utilize 'Diatype REKKI Medium' for all main headlines (56px, 72px, 86px) with precise negative letter-spacing values to emphasize its sharp, technical feel.
- Employ the 8px border-radius for general content cards and the more extreme 100px radius for input fields to differentiate element types.
- Use 'Cloud White' (#ffffff) for primary text on dark backgrounds and 'Steel Gray' (#858585) for muted or secondary text.
- Maintain an 'elementGap' of 20px and 'cardPadding' of 32px to ensure a comfortable density and clear separation within components and content blocks.

## Don'ts

- Do not introduce new saturated accent colors beyond 'Blue Neon' (#0063e1); maintain the dark/monochromatic base with a single color highlight.
- Avoid heavy drop shadows; elevation is primarily achieved through subtle background color shifts between 'Absolute Zero' and 'Dark Card' or 'Deep Space'.
- Do not deviate from the specified extreme border-radii for interactive elements; the 59px (buttons) and 100px (inputs) radius are signature elements.
- Refrain from using 'sans-serif' system font for primary UI text; always use the specific 'Diatype REKKI' fonts to maintain brand typography.
- Do not use generic padding values; adhere to the base unit of 4px and derived component padding (e.g., 32px for cards, 24px for inputs).
- Avoid full-bleed section backgrounds that are not 'Absolute Zero' or a very dark neutral; sections should either be contained or maintain the dark theme.
- Do not use highly textured or photographic backgrounds within core UI components; keep surfaces clean, flat, and dark.

## Elevation

| Element | Style |
| --- | --- |
| Input Field | rgba(255, 255, 255, 0.2) 0px 0px 1px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Rive | Dark theme with strong focus on product UI, sharp typography, and deliberate accent colors. |
| Linear | Monochromatic dark interface with crisp typography and subtle use of accent colors to denote interaction or status. |
| Vercel | Technical, development-focused dark UI, prominent headlines, and use of modern sans-serif fonts with precise letter-spacing. |
| Notion | Functional UI with a focus on clear hierarchy, using subtle shades of grey for surface differentiation in dark mode, and a rounded aesthetic for containers and buttons. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #858585
accent: #0063e1
primary action: #0063e1 (filled action)

Example Component Prompts:
Create a Primary Action Button: #0063e1 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.

Create a 'Dark Base Card': 'Deep Space' background, 8px border-radius, 32px padding, containing 'Cloud White' text using 'Diatype REKKI Regular' at 16px.

Create an 'Input Field': 'Input Charcoal' background, 'Cloud White' text, 100px border-radius, 24px horizontal padding, with a rgba(255, 255, 255, 0.2) 0px 0px 1px 0px shadow. Placeholder text in 'Steel Gray'.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520922237-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520922237-thumb.jpg |
