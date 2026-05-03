# Lyssna — Refero Style

- Refero URL: https://styles.refero.design/style/65f775f1-6dcc-4c49-80d2-b5a017b76f59
- Site URL: https://www.lyssna.com
- ID: 65f775f1-6dcc-4c49-80d2-b5a017b76f59
- Theme: light
- Industry: saas
- Created: 2026-04-30T00:53:34.922Z
- Ranks: newest: 671, popular: 599, trending: 372

> Serene teal workspace

## Description

Lyssna cultivates a calm, focused workspace aesthetic with soft, muted background colors and a distinctive rich teal. Typography is functional and modern, balancing a custom sans-serif for body text with a unique display font for headlines. Components are lightweight with subtle rounding, emphasizing content rather than heavy borders or deep shadows. The overall feel is one of approachable professionalism, with color used sparingly to guide interaction.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Pine | #061d29 | neutral | Primary text, heading text, critical UI elements, dark brand accents |
| Arctic Mist | #e5e7eb | neutral | Subtle borders, dividers, subtle inactive element states |
| Canvas White | #ffffff | neutral | Page backgrounds, primary card surfaces, default UI areas |
| Zenith Teal | #006e75 | brand | Primary action buttons, interactive elements, brand highlights |
| Pale Mint | #b9ffe8 | brand | Subtle accent backgrounds, secondary brand highlights, active state indicators |
| Pale Amber | #fffded | neutral | Secondary card backgrounds, subtle alert backgrounds |
| Soft Stone | #425d6d | neutral | Muted text, secondary borders, less emphasized elements |
| Rose Sunset | #ffb0a4 | accent | Conic gradient start for decorative elements |
| Warm Berry | #4d0037 | accent | Accent backgrounds for decorative panels |
| Soft Magenta | #ffc3e6 | accent | Accent backgrounds for decorative panels |
| Ocean Glimmer | #0b978e | brand | Interactive link backgrounds, subtle decorative fills |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| mint | Inter | 400, 500 | 12px, 13px, 14px, 15px, 16px, 18px, 20px, 22px, 26px | 1.22, 1.25, 1.50 | Primary body text, labels, navigation items, and most UI text. The custom font `mint` at weights 400 and 500 maintains a clean, digital aesthetic for readability across various sizes. |
| grenette | Outfit | 400 | 22px, 46px, 60px | 1.05, 1.15, 1.20 | Display headlines and subheadings. The unique `grenette` font provides a distinct, modern character for larger text, establishing brand presence without being overly bold. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body | 14 | 1.5 |  |
| body-lg | 16 | 1.5 |  |
| subheading | 18 | 1.25 |  |
| heading-sm | 22 | 1.2 |  |
| heading | 26 | 1.22 |  |
| heading-lg | 46 | 1.15 |  |
| display | 60 | 1.05 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "24px",
    "buttons": "8px",
    "elements": "12px"
  },
  "elementGap": "8px",
  "sectionGap": "24px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Call-to-action button for initiating key actions.

Solid 'Zenith Teal' (#006e75) background, 'Midnight Pine' (#061d29) text, 8px border-radius, padding 16px vertical, 24px horizontal. Text is `mint` font, typically weight 500.

### Ghost Outline Button

**Role:** Secondary action button, blends into content.

Transparent background, 'Midnight Pine' (#061d29) text, 'Arctic Mist' (#e5e7eb) border, 8px border-radius, padding 16px vertical, 24px horizontal. Text is `mint` font, typically weight 500.

### Navigation Link Button

**Role:** Navigation items in the header or active states.

Transparent background, 'Midnight Pine' (#061d29) text, 0px border-radius, 0px vertical padding, 12px horizontal padding. On hover, background uses 'Zenith Teal' (#006e75) with 'Pale Mint' (#b9ffe8) text. Text is `mint` font, typically weight 400.

### Default Card

**Role:** Content containers on white backgrounds.

'Canvas White' (#ffffff) background, 24px border-radius, no shadow, 0px padding by default (content drives interior spacing).

### Accent Card - Pale Amber

**Role:** Decorative or highlighted content containers.

'Pale Amber' (#fffded) background, 24px border-radius, no shadow, 0px padding by default.

### Muted Action Link

**Role:** Secondary action or informational links without button styling.

'Midnight Pine' (#061d29) text, transparent background, with 'Artic Mist' (#e5e7eb) border on focus/hover. Uses `mint` font, 8px radius for containers.

## Do's

- Use 'Midnight Pine' (#061d29) for all primary text and headings.
- Apply 'Zenith Teal' (#006e75) for primary call-to-action buttons, ensuring it's always interactable.
- Maintain a 24px border-radius for all content cards, softening surfaces.
- Employ 'Arctic Mist' (#e5e7eb) for subtle UI dividers, borders, and inactive states.
- Prioritize the `mint` font for all body text, navigation, and functional UI elements.
- Use a base unit of 8px for vertical and horizontal element gaps to maintain comfortable density.
- Structure page sections with a 'Midnight Pine' heading using `grenette` font, followed by `mint` body text.

## Don'ts

- Avoid using highly saturated colors for large background areas; reserve them for accents or interactive elements.
- Do not introduce heavy shadows or deep elevation; components should feel lightweight and integrated.
- Refrain from using generic system fonts when `mint` or `grenette` are available.
- Do not deviate from the 8px or 24px border-radii for buttons and cards respectively.
- Do not overcrowd sections; maintain the comfortable density with 24px section gaps.
- Never use 'Pale Mint' (#b9ffe8) for text against light backgrounds; its contrast is insufficient.
- Avoid arbitrary gradients; only use the defined conic gradients for decorative elements, not functional UI.

## Layout

The page primarily uses a max-width contained layout, centered on 'Canvas White' background, with full-width sections for brand logos (implicitly max-width due to content). The hero section features a centered headline and subtext, followed by two primary ghost and filled action buttons. Below the fold, sections alternate between centered stacks of content and common text-left/image-right (or vice-versa) arrangements, utilizing a default card grid for features. Vertical rhythm is maintained by consistent 24px section gaps, with content organized for comfortable readability and scannability. The navigation is a fixed top bar with standard links and two distinct button actions.

## Imagery

The visual language combines abstract, gradient-filled graphics with clear product screenshots and professional, often unposed, photography. Imagery serves both decorative and explanatory roles. Abstract background gradients (like the Rose Sunset conic gradient) provide atmosphere, while tight product screenshots showcase the UI clearly, often with a subtle white border. Photography features diverse individuals in work settings, maintaining a candid, authentic feel rather than highly stylized lifestyle shots. Icons are filled, monocolor, and have a consistent stroke weight, used sparingly for functionality and subtle decoration. Imagery density is moderate, carefully balanced with text to avoid overwhelming the user.

## Similar Brands

| Business | Why |
| --- | --- |
| Usability Hub | Similar focus on muted backgrounds with a single strong accent color (green/teal) for CTAs and iconography, conveying clarity in a product UI. |
| Maze | Shared aesthetic of clean, almost sparse layouts, emphasizing content with soft rounded corners and minimal visual clutter, using type as a primary visual element. |
| Hotjar | The use of an understated, light theme with contrasting dark text and carefully placed, moderate brand colors for interactive elements, creating a professional and inviting experience. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #061d29
background: #ffffff
border: #e5e7eb
accent: #b9ffe8
primary action: #006e75 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #006e75 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a feature card: 'Pale Amber' (#fffded) background, 24px border-radius, `mint` font for body text set to size 14px, weight 400, 'Midnight Pine' (#061d29). Include an `mint` font heading size 22px, weight 500 'Midnight Pine' (#061d29). Ensure ample 24px padding inside the card.
3. Create a navigation bar: 'Canvas White' (#ffffff) background. Left aligned logo (placeholder). Right aligned 'Navigation Link Button' for 'Platform', 'Customers', 'Solutions', 'Pricing', 'Resources'. End with 'Midnight Pine' (#061d29) 'Ghost Outline Button' for 'Log In' and 'Zenith Teal' (#006e75) 'Primary Filled Button' for 'Sign up'.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510366260-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510366260-thumb.jpg |
