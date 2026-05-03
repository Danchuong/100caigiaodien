# The Leap — Refero Style

- Refero URL: https://styles.refero.design/style/6b201ccd-16ae-4c2d-84bb-498f7cb568dd
- Site URL: https://www.theleap.co
- ID: 6b201ccd-16ae-4c2d-84bb-498f7cb568dd
- Theme: light
- Industry: other
- Created: 2026-04-30T00:56:24.484Z
- Ranks: newest: 661, popular: 339, trending: 223

> Playful digital canvas: light, rounded, and vividly accented.

## Description

The Leap channels a vibrant, upbeat digital playground aesthetic through a light canvas, rounded organic shapes, and a playful brand palette. Typography uses custom, expressive sans-serifs, reserving a sophisticated serif for display headings. Surfaces are flat and borderless, relying on soft elevation and vivid background gradients to define regions. The system embraces a joyful, approachable tone, making heavy use of a bright yellow-green accent for calls to action and highlights, contrasting with a deep, muted brown for primary text. Design elements feel organic and friendly, avoiding sharp angles or heavy dividers.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Earth Clay | #482317 | brand | Primary text, prominent links, heading, and subtle outlined borders. This deep, muted brown provides a grounded contrast to the otherwise light and vibrant palette |
| Lemon Zest | #ecf956 | accent | Primary calls to action, active navigation states, and highlight backgrounds. This vivid yellow-green injects energy and a playful urgency into interactive elements |
| Sky Mist | #b1dcfc | accent | Background for secondary cards or content sections, offering a cool, muted contrast to the warmer greens and yellows |
| Lime Spritz | #c6e57d | accent | Decorative card backgrounds and gradient components, contributing to the fresh, vibrant feel; Accent gradient for specific sections, blending earthy green with soft gray |
| Meadow Glow | #f3fb9a | accent | Secondary card backgrounds and visual accents, deepening the site's overall green-yellow thematic |
| Page Canvas | #e5e7eb | neutral | Dominant page background, neutral borders, and subtle separators. This light gray serves as the primary canvas for the UI |
| Whisper White | #fafafa | neutral | Card backgrounds and secondary surface elements, providing a slightly brighter white for content areas |
| Lavender Bloom Gradient | #f3e8f3 | brand | Background gradient for hero sections and prominent visual areas, creating a soft, organic wash of color |
| Sky Burst Gradient | #29a7ff | accent | Dynamic visual gradients hinting at interactivity or depth |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Favorit | Inter | 350, 400 | 13px, 15px, 16px, 20px, 29px | 1.00, 1.50 | Body text and user interface elements. This custom sans-serif brings a friendly, approachable tone to detailed information and controls. |
| ABC Favorit | Inter | 350, 400 | 14px, 15px, 16px, 20px, 22px, 25px, 27px, 30px | 1.00, 1.07, 1.20 | Subheadings, specific callouts, and secondary buttons. It extends the Favorit family with slightly more robust proportions for mid-size text. |
| Favorit-Bold | Inter | 700 | 18px, 24px | 1.00, 1.20 | Section titles and emphasized short phrases. Its bold weight brings hierarchy and impact without losing the friendly character. |
| Tobias | Playfair Display | 300 | 54px, 60px, 70px | 1.03, 1.20 | Hero and display headings. This light-weight serif exudes a refined confidence, creating a distinctive and memorable brand voice. |
| Favorit-Regular | Inter | 400 | 20px | 1.20 | Specific iconography and decorative text elements. Provides a consistent base for small, functional text. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1 | 0.13 |
| body-sm | 15 | 1 | 0.15 |
| subheading | 20 | 1.2 | 0.2 |
| heading | 24 | 1 | -0.888 |
| heading-lg | 29 | 1 | -0.435 |
| display | 60 | 1.03 | -1.2 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "30px",
    "badges": "100px",
    "buttons": "100px",
    "elements": "30px",
    "navigation": "20px"
  },
  "elementGap": "16px",
  "sectionGap": "24px",
  "cardPadding": "30px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Call to action

Filled button with 'Lemon Zest' (#ecf956) background, 'Earth Clay' (#482317) text, and a highly rounded '100px' border-radius. Padding is 10px top / 7px bottom, 30px horizontal, creating an elongated, soft pill shape. Text uses ABC Favorit weight 400.

### Navigation Link

**Role:** Navigation element

Text link using Favorit font, weight 350, with 'Earth Clay' (#482317) color. No background, minimal padding, and an implicit active state shown through 'Lemon Zest' (#ecf956) backgrounds in specific contexts.

### Standard Content Card

**Role:** Content container

Utilizes 'Whisper White' (#fafafa) background, '30px' border-radius, and no explicit border or shadow, relying on spacing and background contrast for definition. Inner padding is '40px' all around.

### Review Card

**Role:** Testimonial display

Features 'Whisper White' (#fafafa) background, a '15px' border-radius, and no shadow. Internal padding is tighter at '15px' vertical and '22px' horizontal.

### Featured Content Card

**Role:** Prominent content container

Uses 'Whisper White' (#fafafa) background with a '30px' border-radius, similar to standard but with more generous '53px' vertical and '50px' horizontal padding.

### Highlight Card

**Role:** Decorative content block

A visually distinct card with 'Sky Mist' (#b1dcfc) background and a '28px' border-radius. It appears to act as a background element for layered content, featuring no explicit padding as the inner content dictates spacing.

## Do's

- Prioritize 'Earth Clay' (#482317) for all primary text and 'Lemon Zest' (#ecf956) for primary interactive elements.
- Use 'Tobias' weight 300 for significant display headings, emphasizing its unique character and light visual weight.
- Apply a '100px' border-radius to buttons and tags to maintain the soft, playful aesthetic.
- Layer text on 'Page Canvas' (#e5e7eb) or 'Whisper White' (#fafafa) for optimal contrast, ensuring readability for smaller text sizes.
- Employ linear gradients like 'Lavender Bloom Gradient' for backgrounds to create subtle depth and organic visual interest.
- Maintain a comfortable density with an 'elementGap' of '16px' and 'cardPadding' of '30px' for most content blocks.

## Don'ts

- Avoid sharp corners; all functional elements like cards and buttons should use generous border-radii (e.g., 30px or 100px).
- Do not use dark or opaque backgrounds for body text; maintain the light theme with high contrast text on pale surfaces.
- Refrain from heavy drop shadows; rely on background gradients and distinct background colors for visual separation.
- Do not introduce new typefaces; utilize the established Favorit and Tobias families exclusively.
- Avoid overly dense layouts; use generous spacing including a 'sectionGap' of '24px' to provide breathing room.
- Do not use highly saturated blues or reds outside of the approved accent and semantic palettes; these would clash with the existing vibrant but pastel-influenced brand colors.

## Layout

The page uses a full-bleed model with content centered within an implied maximum width, creating a spacious feel. The hero section features a large, sophisticated serif headline centered over a soft gradient background with a prominent product mockup on the right. Sections alternate between a light 'Page Canvas' background and soft decorative gradients. Content is often arranged in prominent two-column layouts, combining text on the left with a visual element on the right, or three-column card grids for features and testimonials. Vertical section spacing is comfortable, promoting a flow from one block to the next without harsh dividers. The sticky top navigation is minimal, featuring a discreet logo, text links, and a 'Lemon Zest' pill-shaped primary action button.

## Imagery

The site predominantly uses product screenshots and abstract, playful illustrations to convey its message. Product screenshots are typically presented as mobile device mockups, often within a blurred, pastel-gradient background, showing clear, staged UI. Illustrations are flat, geometric, and often outlined, depicting abstract concepts or simplified figures with brand colors like 'Lemon Zest' as accents. Photography is primarily lifestyle-oriented, showcasing creators, often cropped with organic, soft-edged masking or placed within decorative frames. Icons are minimalist, outlined, and mono-color, typically in 'Earth Clay'. Imagery plays a dual role: explanatory for product features and aspirational for creator lifestyle, maintaining a light, approachable density within sections.

## Similar Brands

| Business | Why |
| --- | --- |
| Canva | Shares a playful, intuitive interface with bright accent colors, soft shapes, and a focus on creative empowerment. |
| FloDesk | Features a pastel color palette, custom typography, and a feminine, approachable aesthetic for creator-focused tools. |
| Linktree | Employs an emphasis on clean, mobile-first design for 'link-in-bio' solutions, often featuring custom branding and high-contrast calls to action. |
| Buffer | Uses soft illustrations, a friendly sans-serif combined with a distinctive display font, and light, spacious layouts for digital tools. |
| Notion | Known for minimal UI complemented by expressive typography and subtle, functional color accents within a clean, productive canvas. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
text: #482317
background: #e5e7eb
border: #e5e7eb
accent: #c6e57d
primary action: #ecf956 (filled action)

### 3-5 Example Component Prompts
1. Create a hero section: 'Lavender Bloom Gradient' background. Headline "Selling on social, made simple" using Tobias weight 300 at 70px, color 'Earth Clay' (#482317), letter-spacing -1.4px. Subtitle "The link-in-bio store made for selling digital products to mobile audiences." using Favorit weight 400 at 20px, color 'Earth Clay'. A Primary Action Button: 'Lemon Zest' (#ecf956) background, 'Earth Clay' (#482317) text "SIGN UP FREE", 100px radius, 10px 30px padding.
2. Design a feature card: 'Whisper White' (#fafafa) background, 30px border-radius, 40px padding. Title "Seamless customer experience" using Favorit-Bold weight 700 at 24px, color 'Earth Clay' (#482317), letter-spacing -0.888px. Body text "Create a seamless customer experience that earns you $$$, all with one simple tool." using Favorit weight 400 at 16px, color 'Earth Clay'.
3. Construct a navigation bar: 'Page Canvas' (#e5e7eb) background with a subtle nav shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px. Standard navigation links "Features", "Pricing" using Favorit weight 350 at 15px, color 'Earth Clay' (#482317). A Primary Action Button "SIGN UP FREE" using 'Lemon Zest' (#ecf956) background, 'Earth Clay' (#482317) text, 100px radius, 10px 30px padding.
4. Build a testimonial card: 'Whisper White' (#fafafa) background, 15px border-radius, 15px 22px padding. Testimonial quote text "My link in bio is GORGEOUS!" using Favorit weight 400 at 16px, color 'Earth Clay' (#482317). Author name using Favorit weight 350 at 13px, color 'Earth Clay' (#482317).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510539586-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510539586-thumb.jpg |
