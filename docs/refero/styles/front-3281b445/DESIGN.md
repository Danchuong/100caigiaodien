# Front — Refero Style

- Refero URL: https://styles.refero.design/style/3281b445-805b-4dc7-933f-42b544a6d798
- Site URL: https://front.com
- ID: 3281b445-805b-4dc7-933f-42b544a6d798
- Theme: dark
- Industry: saas
- Created: 2026-02-19T09:55:28.000Z
- Ranks: newest: 1163, popular: 341, trending: 601

> Deep Violet Command Center. An enterprise platform that feels personal and approachable through color and shape.

## Description

Front's visual style is a bold declaration of authority, centered around a deep, immersive purple canvas. It balances the playful energy of vibrant accents with the serious undertones of a mature B2B SaaS. The use of custom typography and deliberate shape choices—sharp corners for content containers vs. generous 40px and 64px radii for interactive elements—creates a dynamic tension, projecting a brand that is both innovative and reliable. The unique deep violet background establishes a distinct brand identity, ensuring instant recognition.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Deep Violet | #300c41 | brand | Major surface backgrounds, key branding elements. Its depth provides a canvas for lighter text and vibrant accents. |
| Accented Plum | #5b1f76 | brand | Background for secondary elements and subtle brand accents. A richer, slightly more saturated version of the primary violet. |
| Primary White | #ffffff | neutral | Primary text color against dark backgrounds, button foregrounds, and key interactive elements. Provides strong contrast. |
| Warm Lemon | #dee948 | accent | Primary call-to-action button background, active state indicators. Its vividness grabs attention against the deep violet. |
| Bright Lavender | #e2dcf6 | neutral | Light text on dark backgrounds, secondary button backgrounds, and subtle highlight elements. A near-gray with a cool, violet undertone. |
| Rich Plum | #0d1d39 | neutral | Primary text on light backgrounds, headers. A very dark, desaturated violet that reads as a sophisticated dark gray. |
| Soft Indigo | #d0c6f0 | neutral | Text for secondary actions, subtle borders, and placeholder text. A muted violet that adds a touch of color to neutral elements. |
| Jet Black | #1c1e20 | neutral | Dominant body text, subtle borders, and icons on light backgrounds. A highly prominent near-black for content. |
| Clean White | #f0f4fe | neutral | Underlying page background for non-hero sections. A very subtle cool white. |
| Vivid Grape | #8034bf | brand | Background for secondary buttons, navigation links, and subtle interactive highlights. A vivid, pure violet. |
| Mid Grey | #5b5d63 | neutral | Body text on lighter backgrounds, secondary icons. A desaturated mid-tone gray. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Suisse Intl | Inter | 400, 500 | 10px, 12px, 14px, 15px, 16px, 17px, 20px, 25px, 30px, 36px, 43px, 52px, 62px | 1.10, 1.17, 1.19, 1.20, 1.21, 1.25, 1.27, 1.33, 1.40, 1.41, 1.43, 1.50, 1.53, 2.50 | The primary typeface for all content, from headings to body text and UI elements. Its clean, slightly humanist geometry ensures excellent readability across all sizes, defining the brand's voice as precise and approachable. |
| Suisse Works | IBM Plex Serif | 500 | 25px | 1.20 | A secondary, sparingly used display serif font, primarily for specific headings or decorative accents. Its distinct character adds a touch of sophistication and differentiation for key statements. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 | 0.067 |
| body | 16 | 1.5 | 0.003 |
| subheading | 20 | 1.4 | -0.015 |
| heading | 25 | 1.2 | -0.01 |
| heading-lg | 36 | 1.25 | -0.019 |
| display | 62 | 1.1 | -0.02 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "10px",
    "inputs": "64px",
    "buttons": "40px",
    "primaryCtaButtons": "64px"
  },
  "elementGap": "8-16px",
  "sectionGap": "32-40px",
  "cardPadding": "16-24px",
  "pageMaxWidth": null
}
```

## Components

### CTA Button Group



### Announcement Banner



### Chat Widget



### Ghost Navigation Button

**Role:** Header navigation, secondary actions

Background transparent, text #ffffff, border #ffffff, 40px border-radius, 0px vertical padding, 16px horizontal padding. A subtle interaction point that doesn't compete with the hero.

### Outline Button (Bright Lavender)

**Role:** Tertiary actions, links, ghost buttons

Background transparent, text #d0c6f0, border #d0c6f0, 64px border-radius, 12px vertical padding, 16px horizontal padding. For less prominent actions, providing a lighter touch.

### Text Link Button

**Role:** Inline text links, header links

Background transparent, text #1c1e20, no border, 0px border-radius. Blends seamlessly with body text while indicating interactivity.

### Product Feature Card

**Role:** Displaying product features or benefits

White background, #1c1e20 text, 10px border-radius, 16-24px padding. Uses the subtle gray card background to distinguish content sections.

## Do's

- Use Deep Violet (#300c41) as the primary background for hero sections and brand statements to establish immediate recognition.
- Apply Warm Lemon (#dee948) exclusively for primary call-to-action buttons to ensure maximum visual impact and clear user guidance.
- Prioritize Suisse Intl 500 for all headlines and Suisse Intl 400 for body text to maintain consistency and legibility.
- Implement a generous 64px border-radius for all primary CTA buttons and critical interactive inputs.
- Employ Bright Lavender (#e2dcf6) for accent text and secondary interactive elements when set against Deep Violet.
- Ensure all primary headings utilize letter-spacing of -0.01eM to -0.02em for a refined, modern presentation.
- Use Jet Black (#1c1e20) as the default text color on all lighter backgrounds like Clean White (#f0f4fe).

## Don'ts

- Do not use multiple accent colors; Warm Lemon (#dee948) is the singular energetic accent.
- Avoid using hard, sharp corners on interactive elements; prefer 40px or 64px radii for buttons and inputs.
- Do not place body text directly on Deep Violet (#300c41) or Accented Plum (#5b1f76) backgrounds; use Primary White (#ffffff) or Bright Lavender (#e2dcf6) for contrast.
- Do not deviate from the Suisse Intl font family for core UI elements and body copy.
- Avoid applying heavy shadows; use subtle inset shadows like `rgb(208, 198, 240) 0px 0px 0px 1px inset` for a soft, layered effect.
- Do not use black text on Warm Lemon (#dee948) buttons; ensure text is dark, nearly black (#1c1e20) for optimal contrast.
- Avoid using the vivid violet hues for large blocks of content; they are best reserved for accents and backgrounds for distinction.

## Layout

The page primarily uses a full-bleed layout for its hero section, featuring a deep violet background with centered, large headlines. Subsequent sections alternate between full-bleed deep violet and clean white backgrounds, providing clear visual breaks. Content within these sections is largely contained within an implicit max-width, centrally aligned. Body content typically follows a single-column stacked format, with occasional two-column layouts for features (text-left/image-right or vice-versa). Interactive elements like navigation and CTA buttons are part of a sticky header, while the chat widget floats at the bottom-right. Spacing is comfortable, leveraging a base unit of 8px for internal element gaps and larger 32-40px section padding.

## Imagery

The visual language for imagery is primarily product-focused, showcasing UI screenshots and abstract visual metaphors that illustrate specific product features. The UI screenshots are treated as distinct, slightly elevated cards with 10px corner radius, showcasing actual in-app experiences. Photography is minimal, appearing only for user avatars, suggesting a focus on the product's function rather than lifestyle. Icons are simple, outlined, and monochromatic, used descriptively to accompany text. The overall density suggests a balance between communicating complex information visually and providing breathing room for text.

## Elevation

| Element | Style |
| --- | --- |
| Chat Widget Bubble | rgb(208, 198, 240) 0px 0px 0px 1px inset |

## Similar Brands

| Business | Why |
| --- | --- |
| Slack | Uses a vibrant, distinct brand color as a primary background, clean UI, and conversational interfaces. |
| Asana | Combines a professional, structured layout with pops of bright, energetic accent colors for calls to action. |
| Intercom | Focus on a customer-centric platform with a friendly, modern aesthetic, often incorporating chat-like UI elements and strong brand colors. |
| Zendesk | B2B customer service platform with a clean, functional UI, but also isn't afraid to use distinct brand colors. |
| Drift | SaaS that prioritizes conversation and clean interfaces, utilizing modern typography and clear CTAs. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (Dark): #1c1e20
- Primary Background (Dark): #300c41
- Accent Background (Light): #f0f4fe
- Primary CTA: #dee948
- Secondary CTA Text: #f0f4fe
- Border (Subtle): #d0c6f0

### Example Component Prompts
1. Create a hero section: Full-bleed background #300c41. Centered headline 'AI for simple support is everywhere. Complex customer operations demand Front.' using Suisse Intl 62px 500, letter-spacing -0.02em, color #e2dcf6. Below it, a line of body text in Suisse Intl 16px 400, color #d0c6f0, line-height 1.5, letter-spacing 0.003em. Two centered buttons: primary 'Request demo' (background #dee948, text #1c1e20, 64px radius, 12px vertical padding, 16px horizontal padding) and secondary 'Start free trial' (background #8034bf, text #f0f4fe, 64px radius, 12px vertical padding, 16px horizontal padding), with 16px element-gap between them.
2. Design a feature card: Background #ffffff, 10px border-radius, 24px padding. Headline 'One view across every team' in Suisse Intl 25px 500, letter-spacing -0.01em, color #1c1e20. Body text below in Suisse Intl 16px 400, color #5b5d63.
3. Implement a ghost navigation button: Text 'Product' in Suisse Intl 16px 400, color #ffffff, background transparent, border #ffffff, 40px border-radius, 0px vertical padding, 16px horizontal padding.
4. Create a chat widget bubble: Background #5b1f76, inset box-shadow `rgb(208, 198, 240) 0px 0px 0px 1px inset`, 10px border-radius. Title 'Welcome to Front!' in Suisse Intl 16px 500, color #e2dcf6. Embedded buttons within have background #8034bf, text #f0f4fe, 64px radius.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932112101-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932112101-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/3281b445-805b-4dc7-933f-42b544a6d798-1777568194542-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/3281b445-805b-4dc7-933f-42b544a6d798-1777568194542-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/3281b445-805b-4dc7-933f-42b544a6d798-1777568194542-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/3281b445-805b-4dc7-933f-42b544a6d798-1777568194542-preview-detail-poster.jpg |
