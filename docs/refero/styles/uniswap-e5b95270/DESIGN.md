# Uniswap — Refero Style

- Refero URL: https://styles.refero.design/style/e5b95270-9148-417a-89c6-32138d83a251
- Site URL: https://uniswap.org
- ID: e5b95270-9148-417a-89c6-32138d83a251
- Theme: light
- Industry: crypto
- Created: 2026-01-29T12:44:23.000Z
- Ranks: newest: 1259, popular: 392, trending: 652

> Fuzzy Neon Playground. Crisp white UI elements float above a swirling background of blurred, vibrant color.

## Description

Uniswap's design system feels like a playful, high-energy data interface, grounded by stark neutrals and then splashed with a vibrant, almost neon palette. The soft, blurry background elements provide a sense of atmospheric depth without heavy shadows or complex textures, creating a digital ether. Type is uniformly monochrome, allowing bold, vivid accents to pop purely through color on interactive elements and data visualizations, drawing the eye instantly to critical information and actions. The overall impression is approachable yet cutting-edge, like a friendly gateway to complex financial technology.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Cloud White | #ffffff | neutral | Page backgrounds, card surfaces, primary text on dark accents, iconography. |
| Ink Black | #131313 | neutral | Primary text, prominent headings, default iconography outlines. Provides high contrast against white backgrounds. |
| Dim Gray | #222222 | neutral | Secondary text, subtle borders, inactive states, navigation elements. A softer contrast than Ink Black. |
| Ash Gray | #6a6a6a | neutral | Muted text, tertiary information, less important icons. Deliberately lower contrast for supporting details. |
| Silver Tone | #acacac | neutral | Subtle placeholder text, light borders, subtle separators. |
| Off White | #f2f2f2 | neutral | Button backgrounds in hover states, very light card backgrounds, component separators. |
| Techno Pink | #ff37c7 | brand | Primary call-to-action buttons, active navigation indicators, key interactive elements. Dominant brand accent. |
| Amethyst Glow | #8251fb | accent | Highlighting specific data points, secondary interactive elements, subtle accent for illustrations. |
| Ember Spark | #ff4d00 | accent | Complementary accent for icons, attention-grabbing data visualizations, and occasional highlight text. |
| Hot Magenta | #f50db4 | accent | Alternative vibrant accent, often paired with Techno Pink or used for distinct elements. |
| Sky Surge | #2abdff | accent | Illustrative elements, indicators of positive progress or available actions, providing a cool counterpoint. |
| Jade Mist | #00c3a0 | accent | Illustrative accents, often used for data visualization or symbolic 'growth' elements. |
| Alert Red | #e01a2b | semantic | Error states, warnings, crucial alerts that require immediate attention. |
| Success Green | #0c8911 | semantic | Positive feedback, success indicators, successful transaction representations. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Basel | Inter | 400, 485, 500, 535 | 12px, 13px, 14px, 16px, 18px, 24px, 36px, 52px, 64px | 0.96, 1.00, 1.11, 1.15, 1.19, 1.20, 1.25, 1.30, 1.33, 1.49 | The primary typeface for all text content. Its clean, geometric yet slightly humanist forms provide both readability for body copy and a modern, technical feel for headlines, reinforced by precise letter-spacing. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.49 | -0.24 |
| body | 14 | 1.49 | -0.28 |
| heading-sm | 18 | 1.3 | -0.36 |
| heading | 24 | 1.25 | -0.48 |
| heading-lg | 36 | 1.15 | -0.72 |
| display | 52 | 1.11 | -1.04 |
| display-lg | 64 | 0.96 | -1.28 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "20px",
    "input": "0px",
    "buttons": "999999px",
    "default": "12px"
  },
  "elementGap": "8px",
  "sectionGap": "32px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Swap Interface Card



### Protocol Stats Card



### Button Group Showcase



### Primary Action Button

**Role:** Filled button

backgroundColor: #ff37c7, color: #ffffff, borderRadius: 999999px, paddingTop: 8px, paddingRight: 16px, paddingBottom: 8px, paddingLeft: 16px. Typography: Basel, weight 500, size 16px. Used for main calls to action like 'Connect' and 'Select token'.

### Secondary Ghost Button

**Role:** Outlined/Ghost button

backgroundColor: rgba(0,0,0,0), color: #131313, border: 1px solid #131313, borderRadius: 12px, padding: 0px. Used for secondary navigation items or less emphasized actions. Text color changes to #222222 when interactive.

### Subtle Pill Button

**Role:** Pill-shaped background button

backgroundColor: rgba(19, 19, 19, 0.08), color: #222222, borderRadius: 999999px, padding: 4px. Used for filters, tags, or subtly highlighted short actions.

### Navigation Link Button

**Role:** Text-only navigation link

backgroundColor: rgba(0,0,0,0), color: #131313 or #222222, borderRadius: 12px, padding: 0px. Used for primary navigation items. Emphasis is achieved via color change or active state indicator.

### Swap Input Field

**Role:** Financial input

backgroundColor: #ffffff, color: #131313, border: 1px solid #f2f2f2 (or rgba(0,0,0,0) as default), borderRadius: 20px, padding: 16px. Placeholder text is Ash Gray (#6a6a6a). Contains sub-elements for currency selection.

### Simple Card

**Role:** Content container

backgroundColor: #ffffff, borderRadius: 20px, padding: typically 16px. Used for containing swap interface or other key information blocks. Often has a subtle box-shadow.

### Icon Button

**Role:** Interactive icon

backgroundColor: rgba(0,0,0,0), color: #131313 (default icon color), padding: typically 8px. Used for search, app links, or settings menus. Border radius is often 12px or 16px to match general softness.

## Do's

- Prioritize Cloud White (#ffffff) for all main page and card backgrounds to ensure a clean, high-contrast canvas.
- Use Techno Pink (#ff37c7) exclusively for primary calls-to-action and active states to maintain visual hierarchy and brand recognition.
- Apply a border-radius of 999999px for all primary and secondary buttons, creating distinct pill shapes.
- Standardize text colors to Ink Black (#131313) for headings and primary content, Dim Gray (#222222) for secondary, and Ash Gray (#6a6a6a) for tertiary details.
- Apply the Basel typeface with a global letter-spacing of -0.02em across all text elements to create a characteristic compact, refined look.
- Maintain 8px as the primary `elementGap` for horizontal and vertical spacing between related UI elements.
- Use a default border-radius of 12px for interactive icons and other contained elements, contrasting with the soft card radius.

## Don'ts

- Do not introduce new color hues; leverage the existing vibrant accent palette and neutral scale for new features.
- Avoid using hard-edged rectangles for interactive elements; all buttons and most content containers should have a significant border radius (12px, 20px, or 999999px).
- Don't rely on shadows for elevation; instead, use subtle background color changes (e.g., from #ffffff to #f2f2f2) or the blurred background elements for visual depth.
- Do not use highly saturated colorful backgrounds. The backgrounds should remain neutral, allowing the blurred elements and UI accents to provide color.
- Avoid decorative typography; all text should use the Basel typeface in its defined weights and sizes.
- Do not use inconsistent padding for components; adhere to the established spacing scale (e.g., 4px, 8px, 12px, 16px) for interior padding.
- Never use the browser default link color (#0000ee); all links should be Ink Black (#131313) or a semantic color like Success Green (#0c8911) as context dictates.

## Layout

The page primarily uses a centered, max-width contained layout for content, but features a full-bleed vibrant blurred background that extends edge-to-edge. The hero section presents a prominent headline over this atmospheric background, followed by a central card-like swap interface. Section rhythm is generally consistent with vertical spacing, often separating content blocks with padding rather than visual dividers. Content elements, such as text and feature callouts, are stacked centrally or arranged in simple, clean two-column layouts. Navigation is a sticky top bar with clearly defined interactive elements, incorporating search and primary actions. The density is comfortable, providing breathing room around key components while still presenting a good amount of information.

## Imagery

The visual language focuses on abstract, blurred, and brightly colored 'blob' shapes that appear to float behind the crisp UI, contributing a sense of ethereal movement and playful energy. These shapes are multi-colored and semi-transparent, creating a soft, luminous background effect that makes the UI elements stand out. Specific icons or illustrations, when present, are often abstract representations of cryptocurrencies or blockchain concepts, using the vibrant color palette. Photography is absent; the emphasis is purely on UI and abstract digital visuals. The treatment is full-bleed for the background effects, while UI components are contained and use soft radii.

## Similar Brands

| Business | Why |
| --- | --- |
| Coinbase | Clean, light UI with clear separation of elements and a focus on financial data presentation. |
| Figma | White interface with a distinct accent color for interactive elements and a functional, component-driven aesthetic. |
| Vercel | Modern, developer-focused UI with precise typography, strong use of neutrals, and judicious application of accent colors. |
| OpenSea | Utilizes a clean, white background for crypto-related content with prominent visual elements and distinct interactive actions. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (Primary): #131313 (Ink Black)
- Background (Page): #ffffff (Cloud White)
- CTA (Primary): #ff37c7 (Techno Pink)
- Border (Default): #f2f2f2 (Off White)
- Accent (Secondary): #8251fb (Amethyst Glow)

### Example Component Prompts
1. **Create a primary CTA button:** Text 'Swap Now' using Basel font, weight 500, size 16px, color #ffffff. Background color #ff37c7, border-radius 999999px, with 12px horizontal and 8px vertical padding.
2. **Generate a standard input field:** Placeholder text 'Enter amount' in Ash Gray (#6a6a6a), input color Ink Black (#131313). No background color (assumes #ffffff from parent), border 1px solid #f2f2f2, border-radius 20px, with 16px padding on all sides.
3. **Design a card for a crypto asset:** Background color #ffffff, border-radius 20px, with 16px padding. Title 'Ethereum' in Ink Black (#131313) using Basel font, weight 500, size 18px. Sub-text 'ETH' in Ash Gray (#6a6a6a) Basel weight 400, size 14px.
4. **Create a subtle pill-shaped filter button:** Text '24H swap volume' in Dim Gray (#222222), Basel font, weight 400, size 13px. Background color rgba(19, 19, 19, 0.08), border-radius 999999px, with 4px padding on all sides.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924257510-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924257510-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e5b95270-9148-417a-89c6-32138d83a251-1777583671609-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e5b95270-9148-417a-89c6-32138d83a251-1777583671609-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e5b95270-9148-417a-89c6-32138d83a251-1777583671609-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e5b95270-9148-417a-89c6-32138d83a251-1777583671609-preview-detail-poster.jpg |
