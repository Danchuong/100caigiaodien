# Virtual — Refero Style

- Refero URL: https://styles.refero.design/style/572bc29f-8827-4f77-b248-08dddf1c2e26
- Site URL: https://virtual.plus-ex.com/showroom
- ID: 572bc29f-8827-4f77-b248-08dddf1c2e26
- Theme: dark
- Industry: other
- Created: 2026-04-30T02:20:39.583Z
- Ranks: newest: 391, popular: 66, trending: 33

> Minimalist digital console.

## Description

This design system presents a stark, high-contrast digital interface. Dominated by deep black backgrounds and crisp white text, it leverages an accent orange purely for subtle guidance and status. Interaction elements are clearly defined by white outline borders, maintaining the minimalist aesthetic. Typography combines a structured, technical display font with a more flexible body font to create hierarchy within this constrained palette. The overall impression is one of precise control and focused functionality within a dark, almost console-like environment.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Void | #000000 | neutral | Page background, button text on outlined buttons |
| Ghost White | #ffffff | neutral | Primary text, outlined button borders, decorative framework lines |
| Muted Ash | #666666 | neutral | Secondary helper text, subtle borders |
| Accent Orange | #ff5c00 | accent | Subtle instruction text, highlights, low-prominence accents |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| neue-haas-grotesk-display | Helvetica Neue | 500 | 10px, 12px, 16px | 1.00, 1.20, 1.40 | Body text and navigation elements. Its crisp, modern lines provide legibility against dark backgrounds. |
| IPM | Staatliches | 500 | 30px, 60px | 1.20, 1.30 | Strong, attention-grabbing headlines. The tight tracking at larger sizes creates a condensed, impactful presence. |
| Arial | Arial | 400 | 13px | 1.20 | Button subtext and secondary labels, offering clear readability at smaller sizes. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1 |  |
| heading | 30 | 1.2 | -0.6 |
| display | 60 | 1.3 | -1.2 |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "10px"
  },
  "elementGap": "10px",
  "sectionGap": "",
  "cardPadding": "30px",
  "pageMaxWidth": null
}
```

## Components

### Outlined Button

**Role:** Primary interaction element for choices.

Features a 10px borderRadius, 2px Ghost White border, Midnight Void background, and Midnight Void text. Padding is 30px on all sides. Internal text uses Arial 13px weight 400.

### Hero Headline

**Role:** Main page title.

Uses IPM font at 60px size, weight 500, with -0.0200em letter-spacing and Ghost White color.

### Instruction Text

**Role:** Guidance or secondary hierarchy within sections.

Styled with Accent Orange, using neue-haas-grotesk-display font at 16px size, weight 500.

### Button Subtext

**Role:** Contextual information for interactive elements.

Appears below button labels; uses Arial 13px, weight 400, Muted Ash color.

## Do's

- Maintain a primary contrast ratio of Ghost White (#ffffff) text on Midnight Void (#000000) backgrounds.
- Use IPM font only for headlines and large display text, applying -0.0200em letter-spacing.
- Apply 10px border-radius to all buttons and similar interactive containers.
- Ensure horizontal and vertical spacing around main content blocks respects the 'spacious' density, with section gaps between 156px and 280px.
- Define interactive elements with a 2px Ghost White border over a Midnight Void background.
- Reserve Accent Orange (#ff5c00) for subtle instructional text or small, non-primary highlights.
- Use Muted Ash (#666666) exclusively for secondary, low-prominence text, like helper or descriptive labels.

## Don'ts

- Do not introduce new background colors; maintain the #000000 dominant canvas.
- Avoid using bold or heavy font weights; the system relies on lighter weights for a structured feel.
- Do not deviate from the outlined button style; avoid solid filled buttons.
- Prevent excessive use of Accent Orange; it is a highlight, not a primary color.
- Do not overcrowd sections; the design relies on spacious layouts and generous use of negative space.
- Avoid decorative imagery that breaks from the stark, high-contrast aesthetic; prefer purely functional or technical visuals.
- Do not use letter-spacing on neue-haas-grotesk-display or Arial; only IPM headlines feature tracking.

## Layout

The page maintains a centered, contained layout, with content focused in the middle of the screen against a full-bleed Midnight Void background. The hero section features a prominent, centered headline with a secondary instruction line. Interactive elements, such as buttons, are also centrally aligned, arranged horizontally. Vertical rhythm is established through significant top and bottom margins on the main content block, creating ample whitespace and a spacious density. Navigation appears to be minimal, suggested by a small 'W.' icon and 'Site of the Day' label in the top right, hinting at off-canvas or minimal global controls.

## Imagery

The visual language is strictly UI-focused, devoid of photography or complex illustrations. It features simple, geometric outline graphics (like the corner brackets) which serve a decorative and structural purpose, echoing a technical blueprint or digital interface. Icons are implied to be minimalist and outlined, consistent with the overall aesthetic. Imagery plays a purely decorative atmospheric role, enhancing the 'digital console' feel without conveying specific content.

## Similar Brands

| Business | Why |
| --- | --- |
| Aerolab | Stark dark theme with minimal accent color, strong typography, and outlined interactive elements. |
| Bruno (personal site) | High-contrast dark mode, focus on custom typography, and use of single accent color for emphasis. |
| Locomotive | Black backgrounds with white text, strong grid-like visual structure, and a modern, digital aesthetic. |
| Akufen (agency) | Dark UI, distinct display typography, and a deliberate sparse use of color limited to functional highlights. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #ffffff
accent: #ff5c00
primary action: no distinct CTA color

Example Component Prompts:
Create a Hero Section: Midnight Void background. Headline "HELLO" IPM 60px weight 500, #ffffff, letter-spacing -1.2px. Subtext "SELECT YOUR CONTROL MODE" neue-haas-grotesk-display 16px weight 500, #ff5c00. Two outlined buttons below, each 10px radius, 2px #ffffff border, 30px padding. Button label IPM 30px weight 500, #000000. Button subtext Arial 13px weight 400, #666666.
Create an Outlined Button: 10px radius, 2px #ffffff border, 30px padding. Label text IPM 30px weight 500, #000000. Helper text Arial 13px weight 400, #666666.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515622785-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515622785-thumb.jpg |
