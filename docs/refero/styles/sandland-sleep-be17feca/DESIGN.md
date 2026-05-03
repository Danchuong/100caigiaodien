# Sandland Sleep — Refero Style

- Refero URL: https://styles.refero.design/style/be17feca-c2bd-4e17-b4d2-ed3ae019a84c
- Site URL: https://sandlandsleep.com
- ID: be17feca-c2bd-4e17-b4d2-ed3ae019a84c
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T03:50:25.342Z
- Ranks: newest: 48, popular: 961, trending: 953

> Calm twilight, soft edges

## Description

Sandland Sleep uses a calm, naturalistic visual language designed to evoke tranquility and trust, combining soft, muted backgrounds with clear, legible typography. A dominant dark navy provides a sense of depth and authority, contrasted by a sunny yellow for key calls to action, creating gentle visual punctuation. Surfaces are largely soft-edged cards with subtle elevation, promoting a friendly and approachable feel while maintaining a clean, digital aesthetic. The overall theme is understated and clean, minimizing distractions to focus on clarity and product presentation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #1a365d | brand | Primary brand color for hero backgrounds, card surfaces, and key icons—establishes a sense of calm and depth |
| Amber Glow | #fae467 | accent | Accent for primary call-to-action buttons, badges, and highlights—injects warmth and guides user attention |
| Scarlet Flash | #a42325 | accent | Decorative accent primarily seen in subtle box-shadows, providing a hint of energy |
| Deepest Night | #000000 | neutral | Primary text color and significant UI elements like backgrounds and borders for high contrast |
| Canvas White | #ffffff | neutral | Main background for cards, text, and interactive elements, providing a clean, bright foundation |
| Ghost Fog | #f2ede8 | neutral | Background for outer page sections, providing a soft, almost imperceptible warmth to the canvas |
| Subtle Ash | #e6e6e6 | neutral | Subtle borders and dividers, indicating structure without strong visual interruption |
| Stone Gray | #666666 | neutral | Muted text for secondary information, helper text, and subtle icon details |
| Pale Pebble | #faf8f6 | neutral | Secondary card background, slightly off-white to create subtle layering |
| Slate Border | #726f6d | neutral | Standard input borders and placeholder text color |
| Dark Umbra | #3d3d3d | neutral | Text color for price points and other specific content areas, a softer alternative to pure black |
| Light Concrete | #cbd5e0 | neutral | Background for neutral, ghost buttons, providing a subtle interactive cue |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Sandland-550 | Open Sans | 400, 500, 600 | 10px, 11px, 12px, 13px, 14px, 15px, 16px, 18px, 19px, 20px, 24px, 28px, 40px, 48px, 72px | 1.00, 1.10, 1.20, 1.30, 1.40, 1.60, 1.67 | Primary typeface for all headings and body text. Its subtle variations in letter spacing across sizes lend a bespoke feel, enhancing readability without drawing attention to the font itself. The regular weight (400) provides a clear, natural voice. |
| Inter | Inter | 400 | 14px, 24px | 1.10, 1.40 | Secondary typeface, used sparingly for specific icons or technical annotations, providing a clean, accessible counterpoint. |
| GTStandard-M | Roboto | 400 | 14px | 1.50 | Used for specific auxiliary informational text, adding a subtle touch of distinctiveness. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.4 | 0.45 |
| body | 15 | 1.6 |  |
| subheading | 18 | 1.4 |  |
| heading-sm | 24 | 1.2 |  |
| heading | 40 | 1.1 | -0.3 |
| heading-lg | 48 | 1.1 | -0.3 |
| display | 72 | 1 | -0.3 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "10px",
    "input": "0px",
    "badges": "10px",
    "buttons": "20px",
    "circular-elements": "999px"
  },
  "elementGap": "8px",
  "sectionGap": "44px",
  "cardPadding": "30px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Primary Action Button

**Role:** Call to action

Filled button with Amber Glow (#fae467) background, Deepest Night (#000000) text, 20px border radius, and generous 16px 24px padding.

### Ghost Outline Button

**Role:** Secondary action

Ghost button with Canvas White (#ffffff) background (90% opacity), Deepest Night (#000000) text, 999px border radius for pill shape, and 1px 6px padding. Used for minimal interactive elements like arrows or small controls.

### Neutral Button

**Role:** Tertiary action

Button with Light Concrete (#cbd5e0) background, Deepest Night (#000000) text, 999px border radius, and 1px 6px padding. Used for subdued interactive elements.

### Default Card

**Role:** Content container

Container with Canvas White (#ffffff) background (60% opacity), 10px border radius, and a subtle shadow rgba(0, 0, 0, 0.1) 0px 4px 12px 0px. Padding is 30px on all sides.

### Elevated Content Card

**Role:** Prominent content display

Container with pure Canvas White (#ffffff) background, 10px border radius, and a more pronounced shadow rgba(0, 0, 0, 0.1) 0px 4px 20px 0px. Padding is 40px on all sides.

### Dark Product Card

**Role:** Product information display

Card with Midnight Ink (#1a365d) background, 10px border radius, no shadow. Used for showcasing products with a distinct visual identity.

### Input Field

**Role:** User input

Transparent background, Slate Border (#726f6d) text and border bottom. Padding is 12px vertical, 0px horizontal. No border radius, relying on the underlying page structure.

### Bestseller Badge

**Role:** Highlight label

Amber Glow (#fae467) background, Deepest Night (#000000) text, 10px border radius, and 5px padding. Used for small, distinctive labels.

## Do's

- Use Ghost Fog (#f2ede8) as the canvas background for most page sections, occasionally using dark backgrounds like Midnight Ink (#1a365d) for hero or feature areas.
- Apply Deepest Night (#000000) for all primary text elements, ensuring high contrast and legibility.
- Utilize Sandland-550 for all typographic elements, leveraging its weight and letter-spacing variations for hierarchy rather than introducing new font families.
- Wrap interactive elements like buttons and badges in a 20px or 10px border radius, respectively, or 999px for pill-shaped elements.
- Make primary calls to action with a filled Amber Glow (#fae467) button, employing Deepest Night (#000000) for text.
- Maintain a comfortable density with an element gap of 8px and card padding of 30px, ensuring visual breathing room. Section gaps should be 44px.
- Use Subtle Ash (#e6e6e6) for hairline borders and separators to define content zones lightly.

## Don'ts

- Avoid using highly saturated colors outside of the Amber Glow (#fae467) accent for primary actions; keep the rest of the palette muted or neutral.
- Do not introduce additional font families beyond Sandland-550, Inter, and GTStandard-M; maintain typographic consistency.
- Refrain from using strong, opaque box shadows; stick to the light, soft shadows defined for cards.
- Do not deviate from the established border radii for components; maintain the consistent level of softness.
- Avoid arbitrary color variations for text or background elements; each color should serve a distinct semantic purpose.
- Do not create layouts that extend beyond the 1200px page max width, ensuring a contained and balanced presentation.

## Layout

The page maintains a max-width of 1200px, centered for readability and focus. The hero section features a full-width background with a centered, prominent headline and a Call-to-Action button over softly rendered product imagery. Content sections typically follow a consistent vertical rhythm with alternating background colors (Ghost Fog #f2ede8 and Canvas White #ffffff where cards overlay) and are separated by a section gap of 44px. Information is frequently arranged in a grid of 3-column cards, presenting products or features. Section headers are often centered and descriptive. Navigation is a sticky top bar with a left-aligned brand logo and right-aligned actions and links.

## Imagery

Imagery largely consists of tight product photography featuring sleep aid boxes, typically isolated on clean backgrounds or presented diagonally for a dynamic feel. Some illustrations are present, characterized by organic, flat shapes and brand-colored accents (like the blue sheep). Icons are generally outlined or filled with a moderate stroke weight, appearing as line art or simple glyphs, used functionally. The overall density of imagery is balanced, serving both decorative-atmospheric roles (hero section) and explanatory purposes (product display).

## Elevation

| Element | Style |
| --- | --- |
| Default Card | rgba(0, 0, 0, 0.1) 0px 4px 12px 0px |
| Elevated Content Card | rgba(0, 0, 0, 0.1) 0px 4px 20px 0px |
| Input Field Focus | rgba(0, 0, 0, 0.13) 0px 1px 0px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Oura Ring | Similar focus on sleep and wellness, with a clean UI, subtle dark backgrounds for key sections, and understated typography. |
| Calm (app) | Emphasizes a tranquil mood through soft color palettes and clear, uncluttered layouts for a soothing user experience. |
| Hims & Hers | Direct-to-consumer health brand aesthetic with a combination of clean product shots and a focused, approachable UI. |
| Seed Health | Modern health and wellness brand with a clean, scientific aesthetic, minimalist cards, and controlled use of accent colors. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #f2ede8
border: #e6e6e6
accent: #1a365d
primary action: #fae467 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #fae467 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design a Product Card for 'Stay Asleep' on a Default Card surface. The card should have a Canvas White (#ffffff) background, 10px radius, rgba(0, 0, 0, 0.1) 0px 4px 12px 0px shadow, and 30px padding. The product title 'Stay Asleep' should use Sandland-550, size 24px, weight 500, color Deepest Night (#000000).
3. Implement a 'Bestseller' Badge using Amber Glow (#fae467) background, Deepest Night (#000000) text, 10px radius, and 5px padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520999113-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520999113-thumb.jpg |
