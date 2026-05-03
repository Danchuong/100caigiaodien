# Dropmark — Refero Style

- Refero URL: https://styles.refero.design/style/5618f26a-4df6-42cb-8081-15e4318b54ff
- Site URL: https://dropmark.com
- ID: 5618f26a-4df6-42cb-8081-15e4318b54ff
- Theme: light
- Industry: productivity
- Created: 2026-04-30T03:59:38.370Z
- Ranks: newest: 9, popular: 558, trending: 361

> Architectural blueprint on white marble; precise organization within a serene, bright expanse.

## Description

Dropmark employs a clean, organized visual style featuring a bright, expansive canvas and structural components delineated by subtle borders and minimal elevation. A vibrant, functional blue serves as the primary accent, providing clear focal points against an otherwise muted palette of grays and off-whites. Typography is confident and direct, utilizing both proportional and tabular figures for clarity. The overall impression is one of efficiency and understated reliability.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, default button fills |
| Whisper Gray | #f7f7f1 | neutral | Subtle background for UI sections, card backgrounds, fills |
| Border Fog | #dcdcd4 | neutral | Subtle borders, dividers, card strokes, inset focus rings |
| Text Graphite | #404040 | neutral | Primary body text, headings, dark button text, general borders |
| Muted Black | #111111 | neutral | Stronger body text, bolder borders, provides high contrast |
| Icon Gray | #7f7f7f | neutral | Muted icons, secondary helper text, subtle borders |
| Action Blue | #00affa | brand | Outline button borders, link text, active states, decorative accents for interaction |
| Deep Violet | #1e2554 | brand | Decorative illustration fills, background for abstract graphics |
| Accent Lilac | #2c2a6c | accent | Decorative illustration fills |
| Vivid Orange | #ff5d43 | accent | Decorative illustration fills, vibrant accents in graphics |
| Bright Teal | #38dede | accent | Decorative illustration fills, functional icon accents |
| Neon Violet | #9164fa | accent | Decorative illustration fills, vibrant graphic accents |
| Soft Rose | #f8b3b8 | accent | Decorative illustration fills, subtle graphic accents |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| DropmarkRealText | Inter | 400, 600, 700 | 13px, 14px, 15px, 16px, 17px, 20px, 24px, 40px | 1.20, 1.50 | Body text, navigation, button labels, and secondary headings. Utilizes proportional numbers for general text flow. |
| DropmarkRealHead | Open Sans | 500 | 24px, 40px, 60px | 1.20 | Primary headings and display text. Its moderate weight provides a firm, clear presence. Tabular figures ('tnum') for alignment in data presentation. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.5 |  |
| heading-sm | 20 | 1.5 |  |
| heading | 24 | 1.2 |  |
| heading-lg | 40 | 1.2 |  |
| display | 60 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "3px",
    "avatars": "60px",
    "buttons": "3px",
    "default": "3px"
  },
  "elementGap": "10px",
  "sectionGap": "60px",
  "cardPadding": "30px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Primary Outlined Button

**Role:** Call to action button for key interactive elements.

Ghost button with a 1px border of Action Blue (#00affa), with Action Blue (#00affa) text. 3px border-radius and generous horizontal padding. On hover, the background might subtly fill or the border might thicken.

### Filled Navigation Button

**Role:** High-contrast action in the header, always visible.

Filled with Text Graphite (#404040), Text Graphite (#404040) border, with Canvas White (#ffffff) text. Features 3px border-radius and `DropmarkRealText` at 14px weight 400.

### Header Navigation Link

**Role:** Standard navigation item for primary site sections.

Text in Text Graphite (#404040), `DropmarkRealText` at 15px weight 400. No background or border, relying on spacing for separation.

### Feature Card

**Role:** Display individual features or content blocks.

Background of Canvas White (#ffffff) with a 3px border-radius. Features a 1px solid border in Border Fog (#dcdcd4) or Text Graphite (#404040). Internal padding of 30px.

### Avatar/Circular Element

**Role:** User profile images or circular decorative components.

Utilizes a 60px border-radius to create perfect circles, often associated with user icons or small illustrative elements.

### Input Field Focus

**Role:** Visual indicator for active input fields.

When an input field is focused, it displays a 2px inset ring in Border Fog (#dcdcd4).

## Do's

- Use Action Blue (#00affa) exclusively for primary interactive elements like outlined button borders and text links, not as a background color for filled buttons.
- Prioritize Whisper Gray (#f7f7f1) and Canvas White (#ffffff) for dominant backgrounds to maintain a light, organized visual theme.
- Apply a consistent 3px border-radius to all interactive components like buttons and cards to ensure a unified softness.
- Structure page sections with a 60px vertical gap to create clear visual separation between content blocks.
- Use Text Graphite (#404040) for primary text and headings to ensure readability against light backgrounds.
- Employ `DropmarkRealText` with 'lnum' feature for all body and general interface text for consistent number alignment.
- Apply `DropmarkRealHead` with 'lnum', 'tnum' features for all headings to ensure aligned tabular figures where numbers are prominent.

## Don'ts

- Avoid using the decorative illustration colors (Deep Violet, Vivid Orange, etc.) for UI elements, reserving them strictly for graphics and illustrations.
- Do not introduce strong drop shadows; rely on subtle borders, inset shadows, and background color shifts for depth.
- Do not use letter-spacing on headings or body text; maintain the 'normal' value for all typography to preserve legibility.
- Avoid deviating from the 3px radius for general component corners; only use 60px for explicitly circular elements.
- Do not use dark backgrounds for major page sections; maintain the light theme with Whisper Gray and Canvas White.
- Do not exceed a page maximum width of 1200px for main content to keep the layout contained and readable.
- Avoid creating filled buttons with Action Blue (#00affa) as the background; its primary role is for outlined elements and links.

## Layout

The page adheres to a max-width of 1200px, centering primary content blocks. The hero section features a prominent headline centered over descriptive text and two distinct CTA buttons, with a large, colorful illustration occupying the lower half, hinting at the product's visual nature. Sections below often alternate between multi-column layouts, such as three-column grids for feature highlights, and stacked centered blocks. Vertical rhythm is established through consistent 60px section gaps. The navigation is a sticky top bar with text links and a distinct filled 'Sign up' button, keeping essential controls always accessible.

## Imagery

The site uses a combination of abstract, geometric illustrations and product-focused graphics. Illustrations are dimensional and colorful, using the full brand/accent color palette (Deep Violet, Vivid Orange, Bright Teal, Neon Violet, Soft Rose) to create dynamic, overlapping scenes that explain features. They serve a decorative and explanatory role, often positioned alongside text. Icons are filled, appearing in brand colors where applicable (e.g., Bright Teal). The overall density of imagery is balanced, supporting the textual content without overwhelming it.

## Similar Brands

| Business | Why |
| --- | --- |
| Airtable | Bright, spacious canvas with an emphasis on primary brand color for interaction and a generally clean, accessible aesthetic. |
| Asana | Productivity tool with a light theme, using a single dominant brand color against a muted palette for visual hierarchy and action. |
| Monday.com | Utilizes a bright background with clearly defined content blocks and a controlled color palette, featuring functional accents. |
| Abstract | Clean, light UI with distinct geometric illustrations, separating brand elements from functional UI components. |
| Milanote | White canvas, emphasis on visual organization, and use of subtle borders/shadows to define content areas. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #404040
background: #ffffff
border: #dcdcd4
accent: #00affa
primary action: #00affa (outlined action border)

Example Component Prompts:
Create an Outlined Primary Action: Transparent background, #00affa border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.
Create a feature card: Canvas White (#ffffff) background, 1px solid border #dcdcd4, 3px border-radius, with 30px internal padding. Caption text at 13px DropmarkRealText weight 400, #404040. Title text at 17px DropmarkRealText weight 600, #404040.
Create a navigation link: Text Graphite (#404040) at 15px DropmarkRealText weight 400. No background or border. On hover, text color should change to Action Blue (#00affa).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521555220-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521555220-thumb.jpg |
