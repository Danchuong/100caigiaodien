# Current — Refero Style

- Refero URL: https://styles.refero.design/style/84b951e2-eaae-4f56-8f3f-d90407517a56
- Site URL: https://current.com
- ID: 84b951e2-eaae-4f56-8f3f-d90407517a56
- Theme: light
- Industry: fintech
- Created: 2026-04-30T00:36:37.216Z
- Ranks: newest: 749, popular: 1311, trending: 1301

> White Canvas Precision

## Description

Current uses a crisp, high-contrast visual system built on a bright white canvas. Typography is the primary means of conveying hierarchy, with precise letter-spacing and varying weights providing clarity. Functional elements are often minimalist, relying on strong outlines or simple fills, and the brand accent color appears as a subtle, unexpected gradient in specific interactive contexts, avoiding overt saturation for a sophisticated feel. The overall impression is direct and confident.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Storm Anthracite | #000000 | neutral | Primary text, darkest surface elements, filled buttons, dark borders |
| Cloud White | #ffffff | neutral | Page backgrounds, surface fills, text on dark backgrounds, light borders |
| Skyline Gray | #737582 | neutral | Muted body text, secondary information, default link borders, ghost button borders |
| Faded Steel | #dfe5ec | neutral | Subtle dividers, light strokes |
| Ghost Fill | #ebeff2 | neutral | Input background fills, subtle background accents |
| Deep Space | #4e525e | neutral | Placeholder text, tertiary text |
| Current Gradient | #f4cb45 | brand | Decorative background for brand elements, illustration accents — a vibrant linear progression from gold to orange to purple, ending transparent |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| soehne | system-ui, sans-serif | 100, 300, 400, 700 | 12px, 16px, 18px, 20px, 21px, 24px, 48px, 72px, 90px | 1.00, 1.10, 1.20, 1.25, 1.40, 1.50, 1.60 | Primary typeface for all headings and body text. Its range of weights and precise tracking enable clear hierarchical distinctions without changing font family. The light weights (100, 300) are reserved for large, impactful headlines, creating a sense of understated authority. |
| proxima-nova | system-ui, sans-serif | 400, 700 | 16px, 43px | 1.40 | Used sparingly for specific links and minor headings, providing a subtly different textual texture while maintaining legibility. Its slightly wider stance complements the primary typeface. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.4 |  |
| body | 16 | 1.4 |  |
| subheading | 20 | 1.25 |  |
| heading | 24 | 1.2 | -0.31 |
| heading-lg | 48 | 1.1 | -0.96 |
| display | 90 | 1 | -3.6 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "30px",
    "buttons": "9999px",
    "input-text": "0px",
    "square-components": "0px"
  },
  "elementGap": "24px",
  "sectionGap": "80px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Filled Primary Button

**Role:** Action button with dark background.

Background: Storm Anthracite (#000000). Text: Cloud White (#ffffff). Radius: 9999px. Padding: 14px vertical, 24px horizontal. Shadow: rgba(0, 0, 0, 0.01) 0px 140px 56px 0px, rgba(0, 0, 0, 0.05) 0px 79px 47px 0px, rgba(0, 0, 0, 0.09) 0px 35px 35px 0px, rgba(0, 0, 0, 0.1) 0px 9px 19px 0px.

### Outlined Secondary Button

**Role:** Secondary action button with light background.

Background: Cloud White (#ffffff). Text: Storm Anthracite (#000000). Border: 1px Storm Anthracite (#000000). Radius: 9999px. Padding: 14px vertical, 24px horizontal.

### Ghost Action Button

**Role:** Minimalist interactive element, often for 'Learn More' or informational actions.

Background: transparent. Text: Storm Anthracite (#000000). No explicit border or radius visible, implies a text link with button-like functionality. Padding: 0.

### Mobile Number Input Field

**Role:** User input for contact information.

Background: Ghost Fill (#ebeff2). Text: Storm Anthracite (#000000). Placeholder text: Deep Space (#4e525e). No visible border. Radius: 0px. Padding: 8px from bottom with variable horizontal padding.

### Information Icon Button

**Role:** Small, interactive icon for tooltips or additional context.

Background: transparent. Text/Icon: Storm Anthracite (#000000). Radius: 0px. Minimal padding.

### Minimal Navigation Link

**Role:** Navigation links in header/footer.

Background: transparent. Text: Storm Anthracite (#000000). Underline effect on hover (not visible in extracted data).

### Callout Card

**Role:** Feature showcase elements with text and an image.

Background: Cloud White (#ffffff). Radius: 30px. Padding: typically 24px around content. No visible border.

## Do's

- Prioritize `soehne` weight 300 for large display headings (48px and above) to achieve a whisper-like authority.
- Use Storm Anthracite (#000000) for primary text and Cloud White (#ffffff) for backgrounds to maintain high contrast.
- Apply a 9999px border-radius to all buttons for a friendly, approachable aesthetic.
- Maintain high typographic precision by using specified letter-spacing for `soehne` headlines: -0.96px at 48px, -3.6px at 90px.
- Use Skyline Gray (#737582) exclusively for secondary text and ghost button borders, not for primary text or filled elements.
- Ensure all interactive elements, especially primary buttons, receive the defined elevation shadow for subtle depth.
- Employ Ghost Fill (#ebeff2) for subtle background accents specifically on input fields or contained background zones.

## Don'ts

- Do not use highly saturated colors for large areas or backgrounds; reserve them for small, functional accents like the Current Gradient.
- Avoid generic border-radii; adhere strictly to 9999px for buttons, 30px for cards, and 0px for inputs and layout elements.
- Do not vary typography by changing font families too often; `soehne` and `proxima-nova` are the only approved typefaces.
- Do not introduce heavy, opaque shadows; utilize the light, multi-layered elevation shadow for buttons to ensure a subtle effect.
- Avoid cluttering the layout; maintain generous section gaps of 80px and comfortable element gaps of 24px.
- Do not use chromatic colors for text unless they are part of a clearly defined brand element (e.g., within a logo or a specific icon).
- Never use `soehne` with a weight below 400 for body text; reserve lighter weights for headings only.

## Elevation

| Element | Style |
| --- | --- |
| Primary Filled Button | rgba(0, 0, 0, 0.01) 0px 140px 56px 0px, rgba(0, 0, 0, 0.05) 0px 79px 47px 0px, rgba(0, 0, 0, 0.09) 0px 35px 35px 0px, rgba(0, 0, 0, 0.1) 0px 9px 19px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Revolut | Similar focus on modern banking with a clean, high-contrast UI and a distinctive accent color for interactive elements. |
| Wise (formerly TransferWise) | Employs an achromatic canvas with sharp typography and a functional, minimalist approach to imagery and interface components. |
| Chime | Uses a light theme, strong black typography, and clear, rounded buttons for primary actions, akin to Current's design. |
| Monzo | Features a clean white background, dark text, and a distinct aesthetic that often relies on photography and simple graphics to convey brand identity. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #737582 (for subtle outlines), #000000 (for strong outlines)
accent: #f4cb45 (gradient start)
primary action: #000000 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #000000 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design a feature card: Cloud White (#ffffff) background, 30px radius. Inside, an image 200px tall. Below, a headline 'Advance up to $750' using soehne 24px, weight 700, Storm Anthracite (#000000). A body text 'It’s your paycheck – get access to more of it...' using soehne 16px, weight 400, Skyline Gray (#737582). A Ghost Action Button 'Learn More' in Storm Anthracite (#000000) text.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509366784-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509366784-thumb.jpg |
