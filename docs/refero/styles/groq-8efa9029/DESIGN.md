# Groq — Refero Style

- Refero URL: https://styles.refero.design/style/8efa9029-b39c-48db-a8ec-c97c645a7a58
- Site URL: https://groq.com
- ID: 8efa9029-b39c-48db-a8ec-c97c645a7a58
- Theme: light
- Industry: ai
- Created: 2026-01-15T17:42:46.000Z
- Ranks: newest: 1313, popular: 308, trending: 437

> Precision orange glow on matte gray. Like a control panel's critical warning light in a sophisticated machine.

## Description

Groq's aesthetic marries industrial-minimalism with high-energy accents. A muted, near-achromatic palette of warm grays and off-whites provides a calm, technical canvas. The single, vivid orange (#F43E01) provides an immediate, focused punch of energy and urgency, appearing exclusively on key interactive elements. Space Grotesk, with its wide letter-spacing only at smaller sizes, creates a modern, spacious feel even at high information density, while IBM Plex Mono anchors technical detail with its fixed-width precision.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Obsidian Slate | #2d2f33 | neutral | Primary text, headline color, dark surface backgrounds. |
| Canvas White | #ffffff | neutral | Page backgrounds, button text, elevated card surfaces. |
| Warm Mist | #f3f3ee | neutral | Light background for sections and UI elements, subtle contrast against Canvas White. |
| Ash Concrete | #e8e8de | neutral | Card backgrounds, slightly darker variant of Warm Mist for deeper partitioning. |
| Deep Pewter | #2a2a25 | neutral | Button backgrounds, dark elements, providing strong contrast. |
| Steel Gray | #c2c2be | neutral | Border colors, subtle dividers. |
| Soft Stone | #69695d | neutral | Secondary text, descriptive elements, lighter contrast against dark backgrounds. |
| Faded Quartz | #9c9c90 | neutral | Tertiary text, subtle UI elements, disabled states. |
| Neon Zest | #f43e01 | brand | Primary call-to-action buttons, active states, key interactive indicators — this vivid orange is the sole brand accent, demanding attention. |
| Deep Ember | #c23101 | brand | Darker shade of Neon Zest, used for hover states or subtle brand accents in darker contexts. |
| Lavender Haze | #e09afe | accent | Decorative color for specific content sections, not interactive. |
| Violet Tint | #d377fd | accent | Minor decorative accent, borderline invisible in usage. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Space Grotesk | system-ui, sans-serif | 300, 400 | 13px, 14px, 15px, 17px, 19px, 21px, 24px, 28px, 32px, 36px, 46px | 0.90, 1.00, 1.30, 1.40, 1.57 | Primary typeface for all headings, body text, and UI elements. Its slightly condensed forms and negative letter-spacing for larger sizes contribute to a sleek, modern, yet readable presentation. |
| IBM Plex Mono | monospace | 400, 500 | 10px, 12px, 14px | 1.17, 1.20, 1.30, 1.40, 1.57 | Used for code snippets, technical figures, and any content requiring monospace precision. Its elevated letter-spacing emphasizes its distinct, technical role. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.57 | 0.1 |
| body-lg | 15 | 1.57 | -0.3 |
| heading-sm | 24 | 1.4 | -0.48 |
| heading | 32 | 1.3 | -0.64 |
| heading-lg | 36 | 1 | -0.72 |
| display | 46 | 0.9 | -0.92 |

## Spacing & Shape

```json
{
  "radius": {
    "misc": "5px",
    "cards": "0px",
    "forms": "10px",
    "buttons": "1000px"
  },
  "elementGap": "4-16px",
  "sectionGap": "48-80px",
  "cardPadding": "0px",
  "pageMaxWidth": "1440px"
}
```

## Components

### Primary CTA Button Group



### Testimonial Card



### Dark Feature Section Block



### Primary Action Button

**Role:** Call to action

Background: Neon Zest (#f43e01), Text: Canvas White (#ffffff), Border: Canvas White (#ffffff). Radius: 1000px (full pill). Padding: 10px vertical, 16px horizontal. This is the prominent interactive element. Text uses Space Grotesk.

### Ghost Button

**Role:** Secondary action

Background: transparent (rgba(0,0,0,0)), Text: Obsidian Slate (#2d2f33), Border: Obsidian Slate (#2d2f33). Radius: 1000px. Padding: 0px. Used for subtle navigation or less critical actions. Text uses Space Grotesk.

### Utility Button

**Role:** Tertiary action

Background: Deep Pewter (#2a2a25), Text: Warm Mist (#f3f3ee), No border. Radius: 5px. Padding: 12px. Used for footer or less prominent interaction. Text uses Space Grotesk.

### Navigation Link

**Role:** Header navigation

Background: transparent (rgba(0,0,0,0)), Text: Obsidian Slate (#2d2f33), No border. Radius: 1000px. Padding: 10px vertical, 16px horizontal, or 0px. Used for top navigation items. Text uses Space Grotesk.

### Hero Card

**Role:** Informational block

Background: transparent (rgba(0,0,0,0)), No border, No shadow. Radius: 0px. Padding: 0px. Used in the main content area for visual emphasis. Text uses Space Grotesk.

### Testimonial Card

**Role:** Social proof

Background: Ash Concrete (#e8e8de), No border, No shadow. Radius: 0px. Padding: 0px. Used for customer quotes. Text uses Space Grotesk.

## Do's

- Always use Neon Zest (#f43e01) exclusively for primary calls to action or critical indicators to preserve its impact.
- Maintain a clear visual hierarchy by limiting headline weights to Space Grotesk 300 or 400, rather than bolder weights, to align with the understated authority.
- Apply a 1000px border-radius to all primary interactive elements (buttons, navigation pills) for a consistent, modern softness.
- Utilize a base spacing unit of 8px, applying multiples like 4px, 8px, 12px, 16px for comfortable density.
- Use Space Grotesk with -0.0200em letter spacing for headlines to give them an expansive, deliberate feel.
- Employ IBM Plex Mono only for technical content, ensuring its 0.1000em letter spacing clearly distinguishes it from untracked text.

## Don'ts

- Never introduce additional vivid color accents; Neon Zest (#f43e01) is the sole saturated brand color.
- Avoid using drop shadows for elevation; rely on background color changes (e.g., Canvas White, Warm Mist, Ash Concrete) for depth.
- Do not vary border radii outside of the established 1000px for buttons, 5px for utility elements, and 0px for informational cards to maintain shape consistency.
- Do not use generic system fonts; always specify Space Grotesk or IBM Plex Mono for brand consistency.
- Avoid arbitrary uses of uppercase; only apply to specific, clearly defined labels or components following established patterns.

## Layout

The page adheres to a max-width contained model (1440px), where content is centered within a clear canvas. The hero section often adopts a split-layout pattern, with a prominent headline and call-to-action on one side and a product visual or abstract graphic on the other. Section rhythm alternates between light (Canvas White, Warm Mist) and darker (Black, Deep Pewter) backgrounds, creating clear visual breaks and an implicit flow down the page. Content arrangement frequently uses a text-left/image-right alternating pattern. There's also a grid for customer testimonials, appearing in a three-column layout. The overall density is comfortable, with generous section gaps. A sticky header with top-level navigation ensures constant access to key links and a 'Start Building' CTA.

## Imagery

This site prominently features a mixed visual language. Product screenshots are contained and serve an explanatory role. These are often tightly cropped, emphasizing the hardware or specific UI. The brand uses abstract, clean graphics to illustrate concepts, which are geometric and often monochromatic or leverage the subtle neutral palette. There's also some usage of partner logos in a grayscale, badge-like style for social proof. The overall density is balanced, with imagery serving both decorative atmosphere and explanatory content roles, often nestled within text blocks or acting as visual anchors in sections. When present, icons are filled and subtle, blending into the UI rather than standing out.

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Similar approach to using a refined neutral palette with a single, highly saturated accent color for primary actions, and a preference for modern sans-serif typography. |
| Netlify | Shares a technical, developer-centric aesthetic with clear, functional layouts and a balance of informational graphics and concise text, avoiding decorative flourishes. |
| Stripe | Employs a clean, spacious layout, strong typography with subtle letter-spacing adjustments, and selective use of brand colors to highlight key information in an understated, authoritative manner. |
| Linear | Features a highly optimized, minimalist UI with a near-achromatic base, strong typography for hierarchy, and pops of color for interaction, reflecting a focus on efficiency and precision. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (primary): #2d2f33
- Background (page): #ffffff
- Background (section): #f3f3ee
- CTA (button): #f43e01
- CTA (text): #ffffff
- Border (subtle): #c2c2be

### 3-5 Example Component Prompts
1. Create a primary hero button: 'Start Building' text with Space Grotesk, 400 weight, 14px size, Canvas White (#ffffff) text color. Background is Neon Zest (#f43e01), border is Canvas White (#ffffff). Corner radius is 1000px, padding 10px vertical and 16px horizontal.
2. Design a section with a Warm Mist (#f3f3ee) background: Use a headline 'To deliver different results, you need a different stack.' with Space Grotesk, 46px size, 0.9 lineHeight, 300 weight, Obsidian Slate (#2d2f33) color, and -0.0200em letter spacing. Below it, add a body paragraph with Space Grotesk, 15px size, 1.57 lineHeight, 400 weight, Soft Stone (#69695d) color.
3. Implement a Testimonial Card: Ash Concrete (#e8e8de) background, 0px border-radius, 0px padding. Inside, use a quote in Space Grotesk, 17px size, 1.57 lineHeight, 400 weight, Obsidian Slate (#2d2f33) color.
4. Generate a technical explanation block: Deep Pewter (#2a2a25) background with Canvas White (#ffffff) as the main text color at 14px (Space Grotesk). Include an inline code snippet using IBM Plex Mono, 12px size, 1.4 lineHeight, 400 weight, Canvas White (#ffffff) color, and 0.1000em letter spacing.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923702978-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923702978-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/8efa9029-b39c-48db-a8ec-c97c645a7a58-1777652969947-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/8efa9029-b39c-48db-a8ec-c97c645a7a58-1777652969947-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/8efa9029-b39c-48db-a8ec-c97c645a7a58-1777652969947-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/8efa9029-b39c-48db-a8ec-c97c645a7a58-1777652969947-preview-detail-poster.jpg |
