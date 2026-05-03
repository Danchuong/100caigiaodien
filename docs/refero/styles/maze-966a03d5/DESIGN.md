# Maze — Refero Style

- Refero URL: https://styles.refero.design/style/966a03d5-13e9-48d8-9b01-28e6ae3f3967
- Site URL: https://maze.co
- ID: 966a03d5-13e9-48d8-9b01-28e6ae3f3967
- Theme: light
- Industry: fintech
- Created: 2026-04-30T00:17:33.174Z
- Ranks: newest: 845, popular: 880, trending: 768

> Whiteboard clarity, green highlight

## Description

Maze implements a focused, professional workspace aesthetic with a predominantly achromatic palette, accented sparingly by a vivid lime green and a forest green. Large, confident typography provides strong hierarchy against a light, airy canvas. Components are lightweight with subtle card treatments and soft rounded corners, emphasizing content clarity and swift interaction without heavy ornamentation. The overall layout balances information density with generous breathing room, creating an experience that feels both powerful and approachable.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas | #f5f4f0 | neutral | Page backgrounds, subtle card backgrounds, footer background – provides a soft, warm white base |
| Surface White | #ffffff | neutral | Card backgrounds, elevated UI elements, input fills – maintains a crisp white surface for content |
| Ink Black | #000000 | neutral | Primary text, strong headings, button text, icon default color – ensures high contrast and legibility |
| Granite Text | #1c1c1c | neutral | Body text, secondary headings, darker button backgrounds – provides a slightly softer dark tone than pure black |
| Stone Gray Border | #d2cec6 | neutral | Hairline borders, subtle dividers, footer borders – provides definition without visual weight |
| Ash Button | #eae6e1 | neutral | Hover states for backgrounds, subtle button fills – creates a soft, almost imperceptible interaction feedback |
| Muted Text Gray | #706f6c | neutral | Muted body text, helper text, subtle outlines – for less prominent information |
| Slate Input Border | #9e9b94 | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |
| Forest Green | #4b5b0a | brand | Brand accent, link hover states, decorative elements – provides a natural, authoritative pop against neutrals |
| Lime Highlight | #dbf570 | accent | Badge backgrounds, card highlights – a vivid and energetic accent that draws immediate attention |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Phonic | system-ui, sans-serif | 300, 400 | 12px, 14px, 15px, 17px, 22px, 28px, 46px, 58px, 90px, 130px | 1.00, 1.05, 1.10, 1.15, 1.30, 1.40, 1.41 | Headings and key callouts. The light weights (300) combined with expansive letter spacing on larger sizes create a sense of modern confidence and space. The wider tracking on smaller sizes is an unusual but intentional choice to maintain visual airiness. |
| ui-sans-serif | system-ui, sans-serif | 400 | 16px | 1.50 | Body text, navigation, and all functional UI labels. It serves as a neutral, highly legible counterpart to the expressive Phonic headings. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.4 | 0.36 |
| body-sm | 14 | 1.5 | -0.28 |
| heading-sm | 22 | 1.15 | -0.66 |
| heading | 28 | 1.1 | -1.12 |
| heading-lg | 46 | 1.05 | -2.3 |
| display | 58 | 1.05 | -3.48 |
| display-lg | 90 | 1 | -6.3 |
| display-xl | 130 | 1 | -11.7 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "round": "1.67772e+07px",
    "badges": "4px",
    "inputs": "8px",
    "buttons": "8px"
  },
  "elementGap": "8px",
  "sectionGap": "48-64px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Primary Dark Button

**Role:** Call-to-action button for primary actions.

Text: Surface White (#ffffff), Background: Granite Text (#1c1c1c), Border: none. Padding: 12px vertical, 16px horizontal. Border Radius: 8px. Text: ui-sans-serif 16px, weight 400.

### Outline Ghost Button

**Role:** Secondary call-to-action or navigational options.

Text: Ink Black (#000000), Background: transparent. Border: 1px Ink Black (#000000). Padding: 12px vertical, 16px horizontal. Border Radius: 8px. Text: ui-sans-serif 16px, weight 400.

### Pill Ghost Button

**Role:** Small, less prominent actions or filters.

Text: Granite Text (#1c1c1c), Background: transparent. Border: 1px Forest Green (#4b5b0a) for hover/active, transparent otherwise. Padding: 8px vertical, 16px horizontal. Border Radius: 1.67772e+07px (pill shape). Text: ui-sans-serif 16px, weight 400.

### Default Card

**Role:** Content containers for features, data, or product previews.

Background: Surface White (#ffffff), Shadow: none (flat). Padding: 16px. Border Radius: 12px.

### Hero Card

**Role:** Prominent display cards for key product features or testimonials.

Background: Surface White (#ffffff), Shadow: none (flat). Padding: 40px vertical, 0px horizontal. Border Radius: 16px. Used for full-width content sections.

### Input Field

**Role:** User input elements.

Background: Surface White (#ffffff), Text: Granite Text (#1c1c1c). Border: 1px Slate Input Border (#9e9b94). Padding: 0px vertical, 8px horizontal. Border Radius: 8px. Text: ui-sans-serif 16px, weight 400. Placeholder text is Muted Text Gray (#706f6c).

### Lime Badge

**Role:** Small informational labels, typically for 'New' features.

Background: Lime Highlight (#dbf570), Text: Granite Text (#1c1c1c). Padding: 1px vertical, 4px horizontal. Border Radius: 4px. Text: Phonic 12px, weight 400.

### Dark Top Banner

**Role:** Promotional banner across the top of the page.

Background: Ink Black (#000000), Text: Surface White (#ffffff). Padding: 8px vertical, 16px horizontal (implied). Text: ui-sans-serif 16px, weight 400. Contains a Forest Green (#4b5b0a) link.

## Do's

- Use Canvas (#f5f4f0) as the primary page background for all sections, providing a warm, neutral base.
- Apply Phonic font with its light weights (300, 400) and specific letter-spacing variations for all headings to create an expansive, modern feel.
- Maintain a clear functional hierarchy for buttons using Primary Dark Button for main actions and Outline Ghost Button for secondary actions.
- Implement an 8px border radius consistently across all buttons, input fields, and most cards, establishing a soft, approachable feel.
- Utilize Forest Green (#4b5b0a) sparingly, primarily for functional links and subtle decorative strokes, to act as a focused brand accent.
- Employ Lime Highlight (#dbf570) exclusively for small, vivid elements like badges or critical highlights, ensuring its impact is maximized.
- Use Ink Black (#000000) for all primary, high-contrast text elements, especially navigation and call-to-action labels.

## Don'ts

- Do not introduce new saturated primary colors; adhere to the existing Forest Green (#4b5b0a) and Lime Highlight (#dbf570) as the only chromatic accents.
- Avoid heavy shadows or gradients on UI components; maintain the flat, clean aesthetic with minimal elevation.
- Do not use letter-spacing on ui-sans-serif text sizes; it should remain normal unless explicitly specified on Phonic headings.
- Do not deviate from the established 8px border radius for interactive elements and cards; inconsistent rounding will break the visual cohesion.
- Do not use dark backgrounds for main content sections; the system is built on a light canvas with dark text for optimal readability.
- Avoid overly dense layouts; maintain comfortable element (8px) and card (16px) padding, and generous section spacing (48-64px) to preserve visual breathing room.
- Do not use full-width background colors that are saturated or stark; stick to the Canvas (#f5f4f0) and Surface White (#ffffff) for large background areas.

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Shares a light, spacious UI with strong but minimal typography and clear component separation, using a single dominant accent color against mostly neutrals. |
| Vercel | Features a strong focus on high-contrast text hierarchies, a light and dark theme (though this is primarily light), and clean, unembellished UI elements. |
| Linear | Exhibits a similar commitment to an achromatic palette with a precise use of typography for visual hierarchy and subtle card-based interfaces, prioritizing function over heavy adornment. |
| Stripe | Employs an extensive use of white space, a clean sans-serif typeface, and minimal color accents to present complex information in an approachable, professional manner. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #f5f4f0
border: #d2cec6
accent: #dbf570
primary action: #1c1c1c (filled action)

Example Component Prompts:
1. Create a Primary Dark Button: Background #1c1c1c, text #ffffff. Text: ui-sans-serif 16px weight 400. Padding: 12px vertical, 16px horizontal. Border radius: 8px.
2. Design a Default Card: Background #ffffff, border none, shadow none. Padding: 16px. Border radius: 12px. Contain an h3 heading Phonic 28px weight 300, #000000, letter-spacing -1.12px.
3. Create a Primary Action Button: #1c1c1c background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
4. Generate a Lime Badge: Background #dbf570, text #1c1c1c. Text: Phonic 12px weight 400. Padding: 1px vertical, 4px horizontal. Border radius: 4px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508218204-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508218204-thumb.jpg |
