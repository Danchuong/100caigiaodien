# Post Familiar — Refero Style

- Refero URL: https://styles.refero.design/style/3c7a070a-d0f6-4f78-9fdc-58db0b4cbfe1
- Site URL: https://postfamiliar.com
- ID: 3c7a070a-d0f6-4f78-9fdc-58db0b4cbfe1
- Theme: dark
- Industry: ecommerce
- Created: 2026-04-30T03:43:11.341Z
- Ranks: newest: 85, popular: 1019, trending: 1052

> monochromatic editorial starkness

## Description

Post Familiar employs a stark, high-contrast visual language reminiscent of underground zine aesthetics. Dominated by black and white, the design uses bold, oversized typography and a narrow, extended custom typeface to create a sense of unconventional luxury. Color is introduced sparingly and vibrantly through small, functional 'badge' elements and outlined interactive states, acting as energetic accents against the monochrome canvas. The overall impression is one of confident boundary-pushing and exclusivity, with a raw, editorial feel.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |
| Canvas White | #ffffff | neutral | Inverse text, element outlines, secondary backgrounds, and text within dark components |
| Muted Ash | #888888 | neutral | Subtle helper text, inactive elements, and fine borders |
| Experimental Pink | #fc3192 | brand | Brand accent for interactive borders, decorative elements, and specific badges — conveying a bold, unconventional energy |
| Vibrant Yellow | #e8e536 | accent | Brand accent for badges, outlined interactive states, and highlights — signals attention and unique offerings |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Tomato-Grotesk | Bebas Neue | 400 | 16px, 20px, 47px, 71px, 151px, 173px, 230px | 0.90, 1.00, 1.05, 1.50 | Dominant display font for headlines, navigation, and large impactful text. Its extended, condensed form gives the brand its signature editorial authority. |
| Favorit | Inter | 100 | 20px | 1.30 | Fine print, small badges, and functional annotations. Its light weight adds to the distinctness of secondary information. |
| Tiempos | Playfair Display | 100 | 47px, 71px, 151px, 230px | 0.90, 1.00, 1.05, 1.20 | Supplemental display font used for specific large headings, providing a contrasting serif elegance against the bold grotesk. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 16 | 1.5 | -0.064 |
| body | 20 | 1.5 | -0.08 |
| heading | 47 | 1.05 | -0.517 |
| heading-lg | 71 | 1 | -1.207 |
| display | 151 | 0.9 | -3.02 |

## Spacing & Shape

```json
{
  "radius": {
    "badges": "50px",
    "inputs": "50px",
    "buttons": "50px"
  },
  "elementGap": "20px",
  "sectionGap": "72px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Badge Default

**Role:** Informational tag or callout

Black background (#000000), white text (#ffffff), 50px border-radius, with 8px top/4px bottom/16px left/right padding. Uses Tomato-Grotesk 20px, 400 weight.

### Badge Warning

**Role:** Highlighting status or special features

Vibrant Yellow background (#e8e536), black text (#000000), 50px border-radius, with 8px top/4px bottom/16px left/right padding. Uses Tomato-Grotesk 20px, 400 weight.

### Badge Accent

**Role:** Highlighting status or special features with brand color

Experimental Pink background (#fc3192), black text (#000000), 50px border-radius, with 8px top/4px bottom/16px left/right padding. Uses Tomato-Grotesk 20px, 400 weight.

### Outlined Button

**Role:** Primary interactive element that maintains a lightweight feel.

White text (#ffffff) on transparent background with a 1px white (#ffffff) border, 50px border-radius. Padding of 8px vertical and 16px horizontal. Uses Tomato-Grotesk 20px, 400 weight. On hover, the border color changes to an accent color (e.g., Experimental Pink #fc3192).

### Text Input (Modal)

**Role:** User input field within a modal or form.

Transparent background with a 1px white (#ffffff) border, 50px border-radius. Placeholder text in white. Text input in white. Padding of 8px vertical and 16px horizontal.

### Navigation Link

**Role:** Top-level navigation item.

White text (#ffffff) on dark background or black text (#000000) on light background. Uses Tomato-Grotesk 20px, 400 weight, normal letter-spacing, with implicit line-height, often underlined or with hover states for emphasis.

### Subscription Modal

**Role:** Prominent information capture overlay.

Set against a full-screen semi-transparent overlay to emphasize content, with a Midnight Ink (#000000) background. Features headline text in Tomato-Grotesk (47px or 71px) and smaller body text in Favorit (20px, 100 weight). Includes a styled text input with a 1px white border and 50px radius for email capture, alongside an arrow icon button.

## Do's

- Prioritize high contrast between text and background, typically #000000 on #ffffff or vice-versa.
- Use Tomato-Grotesk for all primary headlines, navigation, and brand messages, scaling sizes for impact and using negative letter-spacing.
- Employ the 50px border-radius consistently for all interactive elements like buttons, badges, and input fields.
- Introduce brand accent colors (Experimental Pink #fc3192, Vibrant Yellow #e8e536) sparingly, primarily for borders of interactive states or small badges.
- Maintain a spacious layout with minimum 72px vertical padding for major sections to allow visual breathing room.
- Utilize a 1px border weight for all outlined elements and inputs, ensuring minimal visual footprint.
- Brand logo and key branding elements should be predominantly monochrome, relying on texture and typography instead of color.

## Don'ts

- Avoid using multiple colors for text or backgrounds within a single section; stick to the high-contrast black and white palette.
- Do not deviate from the specified font families or their prescribed letter-spacing and line heights.
- Never use small border-radii; all rounded corners must adhere to the 50px value to maintain the distinct badge/pill shape.
- Refrain from using drop shadows or heavy elevation on components; the aesthetic is flat and graphic-driven.
- Do not cram text or elements; whitespace is crucial for this brand's bold, editorial feel.
- Avoid using generic blue for links; active links should either be white/black or outlined with an accent color.
- Do not use gradients; the system relies on solid color blocks and sharp contrasts.

## Layout

The page model alternates between full-bleed sections and implicitly constrained content. The hero section is full-bleed black with oversized, animating typography (Tomato-Grotesk, Tiempos) centered or spread impactfully across the viewport. Subsequent sections often feature a full-bleed black or white background with content (text, occasional subtle graphics) centered or left-aligned within a generous implied max-width. Vertical rhythm between sections is spacious, using prominent section gaps of 72px. Navigation is minimal: 'Menu' top-right, 'Shop' and 'Bag' fixed bottom-left and bottom-right across the viewport. Text often appears stacked and centered, or in alternating text-left/image-right (or graphic-right) patterns. There's no evident grid usage for cards or features, favoring large, individual content blocks.

## Imagery

This design system primarily uses minimal imagery, focusing instead on bold typography and graphic elements. When present, images are often abstract or highly stylized, sometimes with a distressed or glitch-like overlay. There are no traditional product shots or lifestyle photography. Icons are minimal, outlined, and monochromatic, used functionally (e.g., menu, bag, arrow). The density is low, making imagery highly impactful when deployed, contributing to the site's art-forward, content-rich presentation rather than being purely decorative.

## Similar Brands

| Business | Why |
| --- | --- |
| Off-White (fashion brand) | Similar use of oversized, bold, condensed typography and stark black & white palettes with minimal, graphic accent colors. |
| Kinfolk Magazine | Editorial aesthetic, emphasizing high-contrast photography and generous white space around strong typography, often with a raw or analog feel. |
| Acne Studios | Monochromatic approach, strong graphic identity, and use of unconventional or slightly distressed typography. |
| Studio—JQ | Graphic design portfolio sites often feature bold, condensed type, experimental layouts, and minimal color with high contrast. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference:**
- text: #ffffff
- background: #000000
- border: #ffffff
- accent: #fc3192
- primary action: #fc3192 (outlined action border)

**3-5 Example Component Prompts:**
- Create a section with a heading "EXPERIMENTATION" using Tomato-Grotesk 230px, 400 weight, white text (#ffffff), and -0.041em letter spacing on a black background (#000000). Below this, add a small body text in Favorit 20px, 100 weight, white text, normal letter spacing, on the same black background.
- Create an outlined button with the label "LEARN MORE": white text (#ffffff), no background fill, 1px white border (#ffffff), 50px border-radius, and 16px horizontal / 8px vertical padding. Use Tomato-Grotesk 20px, 400 weight.
- Design a badge labeled "NEW RELEASE": Vibrant Yellow (#e8e536) background, black text (#000000), 50px border-radius, with 16px horizontal and 8px top / 4px bottom padding. Use Favorit 20px, 100 weight.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520568295-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520568295-thumb.jpg |
